<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CourseModel;
use App\Models\GradeModel;
use App\Models\ScheduleModel;

class Etudiant extends BaseController
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
     * Affiche la page de connexion étudiant
     */
    public function login()
    {
        // Si déjà connecté en tant qu'étudiant, rediriger vers le dashboard
        if (session()->get('isLoggedIn') && session()->get('user_role') === 'student') {
            return redirect()->to('etudiant/dashboard');
        }

        $data = [
            'title' => 'Connexion Étudiant - EduPlatform',
            'page' => 'etudiant_login'
        ];
        return view('auth/etudiant_login', $data);
    }

    /**
     * Traite la connexion spécifique aux étudiants
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

        // Authentification de l'utilisateur avec vérification du rôle étudiant
        $user = $this->userModel->where('email', $email)
            ->where('role', 'student')
            ->first();

        if ($user && password_verify($password, $user['password'])) {
            // Vérifier si le compte est activé
            if (!$user['is_active']) {
                return redirect()->back()->withInput()->with('error', 'Votre compte étudiant est désactivé.');
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
            session()->setFlashdata('success', 'Connexion étudiante réussie !');

            // Redirection vers le dashboard étudiant
            return redirect()->to('etudiant/dashboard');
        } else {
            return redirect()->back()->withInput()->with('error', 'Identifiants étudiant incorrects.');
        }
    }

    /**
     * Tableau de bord étudiant
     */
    public function dashboard()
    {
        // Vérifier que l'utilisateur est connecté en tant qu'étudiant
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'student') {
            return redirect()->to('etudiant/login')->with('error', 'Veuillez vous connecter en tant qu\'étudiant.');
        }

        $studentId = session()->get('user_id');

        // Récupérer les données de l'étudiant
        $data = [
            'title' => 'Tableau de bord - Étudiant',
            'page_title' => 'Tableau de bord Étudiant',
            'user' => $this->getUserData(),
            'stats' => $this->getStudentStats($studentId),
            'courses' => $this->getStudentCourses($studentId),
            'grades' => $this->getStudentGrades($studentId),
            'schedule' => $this->getStudentSchedule($studentId),
            'recent_activities' => $this->getRecentActivities()
        ];

        return view('dashboard/etudiant/dashboard', $data);
    }

    /**
     * Mes cours - Liste des cours de l'étudiant
     */
    public function mes_cours()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'student') {
            return redirect()->to('etudiant/login')->with('error', 'Veuillez vous connecter en tant qu\'étudiant.');
        }

        $studentId = session()->get('user_id');

        $data = [
            'title' => 'Mes Cours - Étudiant',
            'page_title' => 'Mes Cours',
            'user' => $this->getUserData(),
            'courses' => $this->getStudentCourses($studentId)
        ];

        return view('dashboard/etudiant/mes_cours', $data);
    }

    /**
     * Mes notes - Notes de l'étudiant
     */
    public function mes_notes()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'student') {
            return redirect()->to('etudiant/login')->with('error', 'Veuillez vous connecter en tant qu\'étudiant.');
        }

        $studentId = session()->get('user_id');

        $data = [
            'title' => 'Mes Notes - Étudiant',
            'page_title' => 'Mes Notes',
            'user' => $this->getUserData(),
            'grades' => $this->getStudentGrades($studentId)
        ];

        return view('dashboard/etudiant/mes_notes', $data);
    }

    /**
     * Emploi du temps de l'étudiant
     */
    public function emploi_du_temps()
    {
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'student') {
            return redirect()->to('etudiant/login')->with('error', 'Veuillez vous connecter en tant qu\'étudiant.');
        }

        $studentId = session()->get('user_id');

        $data = [
            'title' => 'Emploi du temps - Étudiant',
            'page_title' => 'Mon Emploi du Temps',
            'user' => $this->getUserData(),
            'schedule' => $this->getStudentSchedule($studentId)
        ];

        return view('dashboard/etudiant/emploi_du_temps', $data);
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
                'role' => 'Étudiant',
                'avatar' => session()->get('user_avatar')
            ];
        }
        return null;
    }

    /**
     * Récupère les statistiques de l'étudiant
     */
    protected function getStudentStats($studentId)
    {
        return [
            'total_courses' => 6,
            'average_grade' => 14.5,
            'pending_assignments' => 3,
            'attendance_rate' => '92%'
        ];
    }

    /**
     * Récupère les cours de l'étudiant
     */
    protected function getStudentCourses($studentId)
    {
        // Simuler des données (à remplacer par une vraie requête)
        return [
            [
                'id' => 1,
                'course_name' => 'Mathématiques Avancées',
                'course_code' => 'MATH201',
                'teacher_name' => 'Dr. Martin',
                'schedule' => 'Lundi 9h-11h, Jeudi 14h-16h',
                'classroom' => 'A201'
            ],
            [
                'id' => 2,
                'course_name' => 'Physique Quantique',
                'course_code' => 'PHY301',
                'teacher_name' => 'Prof. Dubois',
                'schedule' => 'Mardi 10h-12h, Vendredi 9h-11h',
                'classroom' => 'B104'
            ]
        ];
    }

    /**
     * Récupère les notes de l'étudiant
     */
    protected function getStudentGrades($studentId)
    {
        // Simuler des données (à remplacer par une vraie requête)
        return [
            [
                'course_name' => 'Mathématiques Avancées',
                'grade' => 16.5,
                'max_grade' => 20,
                'comment' => 'Excellent travail',
                'date' => '2024-01-15',
                'type' => 'Examen'
            ],
            [
                'course_name' => 'Physique Quantique',
                'grade' => 12.0,
                'max_grade' => 20,
                'comment' => 'Peut mieux faire',
                'date' => '2024-01-10',
                'type' => 'Devoir'
            ]
        ];
    }

    /**
     * Récupère l'emploi du temps de l'étudiant
     */
    protected function getStudentSchedule($studentId)
    {
        // Simuler des données (à remplacer par une vraie requête)
        return [
            [
                'day' => 'Lundi',
                'date' => '2024-01-22',
                'events' => [
                    ['time' => '9h-11h', 'course' => 'Mathématiques Avancées', 'classroom' => 'A201', 'type' => 'cours'],
                    ['time' => '14h-16h', 'course' => 'TP Physique', 'classroom' => 'Lab B', 'type' => 'tp']
                ]
            ],
            [
                'day' => 'Mardi',
                'date' => '2024-01-23',
                'events' => [
                    ['time' => '10h-12h', 'course' => 'Physique Quantique', 'classroom' => 'B104', 'type' => 'cours']
                ]
            ]
        ];
    }

    /**
     * Récupère les activités récentes
     */
    protected function getRecentActivities()
    {
        return [
            ['type' => 'grade', 'message' => 'Nouvelle note en Mathématiques: 16.5/20', 'time' => '2 min ago'],
            ['type' => 'assignment', 'message' => 'Devoir de Physique à rendre', 'time' => '1 hour ago'],
            ['type' => 'course', 'message' => 'Nouveau cours disponible: Chimie Organique', 'time' => '2 hours ago']
        ];
    }
}
