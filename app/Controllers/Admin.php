<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CourseModel;
use App\Models\GradeModel;
use App\Models\ScheduleModel;

class Admin extends BaseController
{
    protected $userModel;
    protected $courseModel;
    protected $gradeModel;
    protected $scheduleModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->courseModel = new CourseModel();
        $this->gradeModel = new GradeModel();
        $this->scheduleModel = new ScheduleModel();
        helper(['form', 'url', 'session']);
    }

    /**
     * Affiche la page de connexion admin
     */
    public function login()
    {
        // Si déjà connecté en tant qu'admin, rediriger vers le dashboard
        if (session()->get('isLoggedIn') && session()->get('user_role') === 'admin') {
            return redirect()->to('admin/dashboard');
        }

        $data = [
            'title' => 'Connexion Admin - EduPlatform',
            'page' => 'admin_login'
        ];
        return view('auth/admin_login', $data);
    }

    /**
     * Traite la connexion spécifique aux administrateurs
     */
    public function process_login()
    {
        // Validation des données
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Authentification de l'utilisateur avec vérification du rôle admin
        $user = $this->userModel->where('email', $email)
            ->where('role', 'admin') // Vérification spécifique du rôle
            ->first();

        if ($user && password_verify($password, $user['password'])) {
            // Vérifier si le compte est activé
            if (!$user['is_active']) {
                return redirect()->back()->withInput()->with('error', 'Votre compte administrateur est désactivé.');
            }

            // Créer la session utilisateur
            $sessionData = [
                'user_id' => $user['id'],
                'user_name' => $user['first_name'] . ' ' . $user['last_name'],
                'user_email' => $user['email'],
                'user_role' => $user['role'],
                'user_avatar' => $user['avatar'],
                'isLoggedIn' => true
            ];

            session()->set($sessionData);

            // Message de succès
            session()->setFlashdata('success', 'Connexion administrateur réussie !');

            // Redirection vers le dashboard admin
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->back()->withInput()->with('error', 'Identifiants administrateur incorrects ou vous n\'avez pas les droits d\'accès.');
        }
    }

    /**
     * Tableau de bord administrateur principal
     */
    public function dashboard()
    {
        // Vérifier que l'utilisateur est connecté en tant qu'admin
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        // Récupérer les statistiques avec gestion d'erreur complète
        $stats = [
            'total_users' => 0,
            'total_teachers' => 0,
            'total_students' => 0,
            'total_courses' => 0,
            'pending_grades' => 0,
            'active_schedules' => 0
        ];

        try {
            $stats['total_users'] = $this->userModel->countAll();
            $stats['total_teachers'] = $this->userModel->where('role', 'teacher')->countAllResults();
            $stats['total_students'] = $this->userModel->where('role', 'student')->countAllResults();

            // Essayer de récupérer les autres stats si les tables existent
            if (method_exists($this->courseModel, 'countAll')) {
                $stats['total_courses'] = $this->courseModel->countAll();
            }
            if (method_exists($this->gradeModel, 'where')) {
                $stats['pending_grades'] = $this->gradeModel->where('status', 'pending')->countAllResults();
            }
            if (method_exists($this->scheduleModel, 'where')) {
                $stats['active_schedules'] = $this->scheduleModel->where('date >=', date('Y-m-d'))->countAllResults();
            }
        } catch (\Exception $e) {
            // Utiliser les valeurs par défaut en cas d'erreur
        }

        // Dernières activités
        $recentActivities = $this->getRecentActivities();

        $data = [
            'title' => 'Tableau de bord - Admin',
            'page_title' => 'Tableau de bord Administrateur',
            'user' => $this->getUserData(),
            'stats' => $stats,
            'recent_activities' => $recentActivities
        ];

        return view('dashboard/admin/dashboard', $data);
    }

    /**
     * Gestion des cours - Liste
     */
    public function courses()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        $courses = $this->courseModel->findAll();

        $data = [
            'title' => 'Gestion des Cours - Admin',
            'page_title' => 'Gestion des Cours',
            'user' => $this->getUserData(),
            'courses' => $courses
        ];

        return view('dashboard/admin/courses', $data);
    }

    /**
     * Ajouter un nouveau cours
     */
    public function add_course()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        if ($this->request->getMethod() === 'post') {
            $courseData = [
                'course_code' => $this->request->getPost('course_code'),
                'course_name' => $this->request->getPost('course_name'),
                'description' => $this->request->getPost('description'),
                'credits' => $this->request->getPost('credits'),
                'teacher_id' => $this->request->getPost('teacher_id'),
                'schedule' => $this->request->getPost('schedule'),
                'classroom' => $this->request->getPost('classroom'),
                'max_students' => $this->request->getPost('max_students'),
                'status' => 'active'
            ];

            if ($this->courseModel->insert($courseData)) {
                return redirect()->to('admin/courses')->with('success', 'Cours ajouté avec succès !');
            } else {
                return redirect()->back()->with('error', 'Erreur lors de l\'ajout du cours.');
            }
        }

        // Récupérer la liste des enseignants
        $teachers = $this->userModel->where('role', 'teacher')->findAll();

        $data = [
            'title' => 'Ajouter un Cours - Admin',
            'page_title' => 'Ajouter un Nouveau Cours',
            'user' => $this->getUserData(),
            'teachers' => $teachers
        ];

        return view('dashboard/admin/add_course', $data);
    }

    /**
     * Validation des notes
     */
    public function grade_validation()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        // Récupérer les notes en attente de validation
        $pendingGrades = $this->gradeModel
            ->select('grades.*, users.first_name, users.last_name, courses.course_name')
            ->join('users', 'users.id = grades.student_id')
            ->join('courses', 'courses.id = grades.course_id')
            ->where('grades.status', 'pending')
            ->findAll();

        $data = [
            'title' => 'Validation des Notes - Admin',
            'page_title' => 'Validation des Notes',
            'user' => $this->getUserData(),
            'pending_grades' => $pendingGrades
        ];

        return view('dashboard/admin/grade_validation', $data);
    }

    /**
     * Approuver une note
     */
    public function approve_grade($gradeId)
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        $updateData = [
            'status' => 'approved',
            'approved_by' => session()->get('user_id'),
            'approved_at' => date('Y-m-d H:i:s')
        ];

        if ($this->gradeModel->update($gradeId, $updateData)) {
            return redirect()->to('admin/grade-validation')->with('success', 'Note approuvée avec succès !');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de l\'approbation de la note.');
        }
    }

    /**
     * Programmation des cours et examens
     */
    public function scheduling()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        // Récupérer le planning
        $schedules = $this->scheduleModel
            ->select('schedules.*, courses.course_name, users.first_name, users.last_name')
            ->join('courses', 'courses.id = schedules.course_id', 'left')
            ->join('users', 'users.id = schedules.teacher_id', 'left')
            ->orderBy('schedules.date', 'ASC')
            ->orderBy('schedules.start_time', 'ASC')
            ->findAll();

        $data = [
            'title' => 'Programmation - Admin',
            'page_title' => 'Programmation des Cours et Examens',
            'user' => $this->getUserData(),
            'schedules' => $schedules
        ];

        return view('dashboard/admin/scheduling', $data);
    }

    /**
     * Ajouter un événement au planning
     */
    public function add_schedule()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        if ($this->request->getMethod() === 'post') {
            $scheduleData = [
                'event_type' => $this->request->getPost('event_type'),
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'course_id' => $this->request->getPost('course_id'),
                'teacher_id' => $this->request->getPost('teacher_id'),
                'date' => $this->request->getPost('date'),
                'start_time' => $this->request->getPost('start_time'),
                'end_time' => $this->request->getPost('end_time'),
                'location' => $this->request->getPost('location'),
                'created_by' => session()->get('user_id')
            ];

            if ($this->scheduleModel->insert($scheduleData)) {
                return redirect()->to('admin/scheduling')->with('success', 'Événement programmé avec succès !');
            } else {
                return redirect()->back()->with('error', 'Erreur lors de la programmation.');
            }
        }

        // Récupérer les cours et enseignants
        $courses = $this->courseModel->findAll();
        $teachers = $this->userModel->where('role', 'enseignant')->findAll();

        $data = [
            'title' => 'Programmer un Événement - Admin',
            'page_title' => 'Programmer un Nouvel Événement',
            'user' => $this->getUserData(),
            'courses' => $courses,
            'teachers' => $teachers
        ];

        return view('dashboard/admin/add_schedule', $data);
    }

    /**
     * Gestion des sorties scolaires
     */
    public function outings()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        // Récupérer les sorties
        $outings = $this->scheduleModel
            ->where('event_type', 'outing')
            ->orderBy('date', 'ASC')
            ->findAll();

        $data = [
            'title' => 'Gestion des Sorties - Admin',
            'page_title' => 'Gestion des Sorties Scolaires',
            'user' => $this->getUserData(),
            'outings' => $outings
        ];

        return view('dashboard/admin/outings', $data);
    }

    /**
     * Analytics et rapports
     */
    public function analytics()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'admin') {
            return redirect()->to('admin/login')->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        // Statistiques avancées
        $analytics = [
            'monthly_registrations' => $this->getMonthlyRegistrations(),
            'course_popularity' => $this->getCoursePopularity(),
            'grade_distribution' => $this->getGradeDistribution(),
            'teacher_performance' => $this->getTeacherPerformance()
        ];

        $data = [
            'title' => 'Analytics - Admin',
            'page_title' => 'Analytics et Rapports',
            'user' => $this->getUserData(),
            'analytics' => $analytics
        ];

        return view('dashboard/admin/analytics', $data);
    }

    /**
     * Récupère les données de l'utilisateur connecté
     */
    protected function getUserData()
    {
        if (session()->get('isLoggedIn')) {
            return [
                'name' => session()->get('user_name'),
                'email' => session()->get('user_email'),
                'role' => 'Administrateur',
                'avatar' => session()->get('user_avatar')
            ];
        }
        return null;
    }

    /**
     * Récupère les activités récentes
     */
    protected function getRecentActivities()
    {
        // Simuler des activités récentes (à remplacer par une vraie requête)
        return [
            ['type' => 'user_registration', 'message' => 'Nouvel étudiant inscrit: Jean Dupont', 'time' => '2 min ago'],
            ['type' => 'grade_submission', 'message' => 'Notes soumises pour Mathématiques', 'time' => '5 min ago'],
            ['type' => 'course_creation', 'message' => 'Nouveau cours créé: Physique Avancée', 'time' => '1 hour ago'],
            ['type' => 'schedule_update', 'message' => 'Emploi du temps mis à jour', 'time' => '2 hours ago']
        ];
    }

    // Méthodes pour les analytics (à implémenter)
    protected function getMonthlyRegistrations()
    {
        return [/* données mensuelles */];
    }

    protected function getCoursePopularity()
    {
        return [/* popularité des cours */];
    }

    protected function getGradeDistribution()
    {
        return [/* distribution des notes */];
    }

    protected function getTeacherPerformance()
    {
        return [/* performance des enseignants */];
    }
}
