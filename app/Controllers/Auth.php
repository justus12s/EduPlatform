<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url', 'session']);
    }

    /**
     * Affiche le formulaire de connexion
     */
    public function login()
    {
        // Si l'utilisateur est déjà connecté, rediriger vers le dashboard
        if (session()->get('isLoggedIn')) {
            return $this->redirectToDashboard(session()->get('user_role'));
        }

        $data = [
            'title' => 'Connexion - EduPlatform',
            'page' => 'login'
        ];
        return view('auth/login', $data);
    }

    /**
     * Traite le formulaire de connexion général
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
        $remember = $this->request->getPost('remember');

        // Authentification de l'utilisateur
        $user = $this->userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Vérifier si le compte est activé
            if (!$user['is_active']) {
                return redirect()->back()->withInput()->with('error', 'Votre compte est désactivé. Veuillez contacter l\'administrateur.');
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

            // Gestion du "Se souvenir de moi"
            if ($remember) {
                $this->setRememberMeToken($user['id']);
            }

            // Message de succès
            session()->setFlashdata('success', 'Connexion réussie ! Bienvenue ' . $user['first_name'] . '.');

            // Redirection selon le rôle
            return $this->redirectToDashboard($user['role']);
        } else {
            return redirect()->back()->withInput()->with('error', 'Email ou mot de passe incorrect.');
        }
    }

    /**
     * Affiche le formulaire d'inscription
     */
    public function register()
    {
        // Si l'utilisateur est déjà connecté, rediriger vers le dashboard
        if (session()->get('isLoggedIn')) {
            return $this->redirectToDashboard(session()->get('user_role'));
        }

        $data = [
            'title' => 'Inscription - EduPlatform',
            'page' => 'register'
        ];
        return view('auth/register', $data);
    }

    /**
     * Traite le formulaire d'inscription
     */
    public function process_register()
    {
        // Validation des données
        $rules = [
            'firstName' => 'required|min_length[2]|max_length[50]',
            'lastName' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'userType' => 'required|in_list[admin,teacher,student]',
            'institution' => 'required|min_length[2]|max_length[100]',
            'password' => 'required|min_length[8]',
            'confirmPassword' => 'required|matches[password]',
            'terms' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Préparation des données pour l'insertion
        $userData = [
            'first_name' => $this->request->getPost('firstName'),
            'last_name' => $this->request->getPost('lastName'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('userType'),
            'institution' => $this->request->getPost('institution'),
            'avatar' => 'https://ui-avatars.com/api/?name=' . urlencode($this->request->getPost('firstName') . '+' . $this->request->getPost('lastName')) . '&background=667eea&color=fff',
            'is_active' => 1,
            'email_verified' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Insertion dans la base de données
        if ($this->userModel->insert($userData)) {
            $userId = $this->userModel->getInsertID();

            // Connexion automatique après inscription
            // SUPPRIMER la connexion automatique et rediriger vers la page de connexion
            session()->setFlashdata('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');

            // Redirection vers la page de connexion
            return redirect()->to('auth/login');
        } else {
            return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.');
        }
    }

    /**
     * Déconnexion de l'utilisateur
     */
    public function logout()
    {
        // Supprimer le token "Se souvenir de moi" si existant
        if (session()->get('isLoggedIn') && isset($_COOKIE['remember_token'])) {
            $this->clearRememberMeToken(session()->get('user_id'));
        }

        // Détruire la session
        session()->destroy();

        // Rediriger vers la page de connexion
        return redirect()->to('auth/login')->with('success', 'Vous avez été déconnecté avec succès.');
    }

    /**
     * Supprime le token "Se souvenir de moi"
     */
    private function clearRememberMeToken($userId)
    {
        $this->userModel->update($userId, [
            'remember_token' => null,
            'remember_expires' => null
        ]);

        // Supprimer le cookie
        setcookie('remember_token', '', time() - 3600, '/');
    }

    /**
     * Mot de passe oublié
     */
    public function forgot_password()
    {
        $data = [
            'title' => 'Mot de passe oublié - EduPlatform',
            'page' => 'forgot_password'
        ];
        return view('auth/forgot_password', $data);
    }

    /**
     * Traitement du mot de passe oublié
     */
    public function process_forgot_password()
    {
        $email = $this->request->getPost('email');

        $rules = [
            'email' => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = $this->userModel->where('email', $email)->first();

        if ($user) {
            // Générer un token de réinitialisation
            $token = bin2hex(random_bytes(32));
            $expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

            // Sauvegarder le token dans la base de données
            $this->userModel->update($user['id'], [
                'reset_token' => $token,
                'reset_expires' => $expires
            ]);

            // Envoyer l'email de réinitialisation (à implémenter)
            // $this->sendResetEmail($user['email'], $token);

            session()->setFlashdata('success', 'Un email de réinitialisation a été envoyé à votre adresse.');
        } else {
            // Pour des raisons de sécurité, on ne révèle pas si l'email existe
            session()->setFlashdata('success', 'Si votre email existe dans notre système, vous recevrez un lien de réinitialisation.');
        }

        return redirect()->to('auth/forgot_password');
    }

    /**
     * Réinitialisation du mot de passe
     */
    public function reset_password($token = null)
    {
        if (!$token) {
            return redirect()->to('auth/forgot_password')->with('error', 'Token de réinitialisation manquant.');
        }

        $user = $this->userModel->where('reset_token', $token)
            ->where('reset_expires >', date('Y-m-d H:i:s'))
            ->first();

        if (!$user) {
            return redirect()->to('auth/forgot_password')->with('error', 'Token de réinitialisation invalide ou expiré.');
        }

        $data = [
            'title' => 'Réinitialiser le mot de passe - EduPlatform',
            'page' => 'reset_password',
            'token' => $token
        ];
        return view('auth/reset_password', $data);
    }

    /**
     * Traitement de la réinitialisation du mot de passe
     */
    public function process_reset_password()
    {
        $token = $this->request->getPost('token');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirmPassword');

        $rules = [
            'password' => 'required|min_length[8]|strong_password',
            'confirmPassword' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = $this->userModel->where('reset_token', $token)
            ->where('reset_expires >', date('Y-m-d H:i:s'))
            ->first();

        if (!$user) {
            return redirect()->to('auth/forgot_password')->with('error', 'Token de réinitialisation invalide ou expiré.');
        }

        // Mettre à jour le mot de passe
        $this->userModel->update($user['id'], [
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'reset_token' => null,
            'reset_expires' => null,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        session()->setFlashdata('success', 'Votre mot de passe a été réinitialisé avec succès. Vous pouvez maintenant vous connecter.');

        return redirect()->to('auth/login');
    }

    /**
     * Page de démonstration
     */
    public function demo()
    {
        $data = [
            'title' => 'Démo - EduPlatform',
            'page' => 'demo'
        ];
        return view('auth/demo', $data);
    }
}
