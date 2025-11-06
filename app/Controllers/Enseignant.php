<?php

namespace App\Controllers;

use App\Models\UserModel;

class Enseignant extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url', 'session']);
    }

    /**
     * Affiche la page de connexion enseignant
     */
    public function login()
    {
        // Si déjà connecté en tant qu'enseignant, rediriger vers le dashboard
        if (session()->get('isLoggedIn') && session()->get('user_role') === 'teacher') {
            return redirect()->to('enseignant/dashboard');
        }

        $data = [
            'title' => 'Connexion Enseignant - EduPlatform',
            'page' => 'teacher_login'
        ];
        return view('auth/enseignant_login', $data);
    }

    /**
     * Traite la connexion spécifique aux enseignants
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

        // Authentification de l'utilisateur avec vérification du rôle teacher
        $user = $this->userModel->where('email', $email)
            ->where('role', 'teacher') // Vérification spécifique du rôle
            ->first();

        if ($user && password_verify($password, $user['password'])) {
            // Vérifier si le compte est activé
            if (!$user['is_active']) {
                return redirect()->back()->withInput()->with('error', 'Votre compte enseignant est désactivé.');
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
            session()->setFlashdata('success', 'Connexion enseignant réussie !');

            // Redirection vers le dashboard enseignant
            return redirect()->to('enseignant/dashboard');
        } else {
            return redirect()->back()->withInput()->with('error', 'Identifiants enseignant incorrects ou vous n\'avez pas les droits d\'accès.');
        }
    }

    /**
     * Tableau de bord enseignant
     */
    public function dashboard()
    {
        // Vérifier que l'utilisateur est connecté en tant qu'enseignant
        if (!session()->get('isLoggedIn') || session()->get('user_role') !== 'teacher') {
            return redirect()->to('enseignant/login')->with('error', 'Veuillez vous connecter en tant qu\'enseignant.');
        }

        $data = [
            'title' => 'Tableau de bord - Enseignant',
            'page_title' => 'Tableau de bord Enseignant',
            'user' => $this->getUserData()
        ];

        return view('dashboard/enseignant/dashboard', $data);
    }

    /**
     * Récupère les données de l'utilisateur connecté
     */
    protected function getUserData()
    {
        if ($this->isLoggedIn()) {
            return [
                'name' => session()->get('user_name'),
                'role' => 'Enseignant',
                'avatar' => session()->get('user_avatar')
            ];
        }
        return null;
    }
}
