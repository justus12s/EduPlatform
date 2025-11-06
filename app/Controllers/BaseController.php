<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class BaseController extends Controller
{
    protected $helpers = ['url', 'form', 'session', 'text'];
    protected $userModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        // Initialiser le modèle avec gestion d'erreur
        try {
            $this->userModel = new UserModel();

            // Vérifier la connexion automatique via "Se souvenir de moi"
            if (!session()->get('isLoggedIn') && isset($_COOKIE['remember_token'])) {
                $this->checkRememberMe();
            }

            // Mettre à jour le dernier accès si connecté
            if (session()->get('isLoggedIn')) {
                $this->userModel->updateLastAccess(session()->get('user_id'));
            }
        } catch (\Exception $e) {
            // Ignorer les erreurs de base de données au démarrage
            // Les tables seront créées via les migrations
        }
    }

    /**
     * Vérifie si l'utilisateur est connecté
     */
    protected function isLoggedIn()
    {
        return session()->get('isLoggedIn') === true;
    }

    /**
     * Vérifie le rôle de l'utilisateur
     */
    protected function hasRole($role)
    {
        return session()->get('user_role') === $role;
    }

    /**
     * Récupère les données de l'utilisateur connecté
     */
    protected function getUserData()
    {
        if ($this->isLoggedIn()) {
            return [
                'id' => session()->get('user_id'),
                'name' => session()->get('user_name'),
                'email' => session()->get('user_email'),
                'role' => session()->get('user_role'),
                'avatar' => session()->get('user_avatar')
            ];
        }
        return null;
    }

    /**
     * Vérifie le token "Se souvenir de moi" pour la connexion automatique
     */
    protected function checkRememberMe()
    {
        if (!session()->get('isLoggedIn') && isset($_COOKIE['remember_token'])) {
            try {
                $token = $_COOKIE['remember_token'];
                $user = $this->userModel->where('remember_token', $token)
                    ->where('remember_expires >', date('Y-m-d H:i:s'))
                    ->first();

                if ($user) {
                    $sessionData = [
                        'user_id' => $user['id'],
                        'user_name' => $user['first_name'] . ' ' . $user['last_name'],
                        'user_email' => $user['email'],
                        'user_role' => $user['role'],
                        'user_avatar' => $user['avatar'],
                        'isLoggedIn' => true
                    ];

                    session()->set($sessionData);

                    // Renouveler le token
                    $this->setRememberMeToken($user['id']);

                    return $this->redirectToDashboard($user['role']);
                }
            } catch (\Exception $e) {
                // Ignorer l'erreur si la table n'existe pas
            }
        }

        return false;
    }

    /**
     * Définit le token "Se souvenir de moi"
     */
    protected function setRememberMeToken($userId)
    {
        try {
            $token = bin2hex(random_bytes(32));
            $expire = time() + (30 * 24 * 60 * 60); // 30 jours

            $this->userModel->update($userId, [
                'remember_token' => $token,
                'remember_expires' => date('Y-m-d H:i:s', $expire)
            ]);

            setcookie('remember_token', $token, $expire, '/');
        } catch (\Exception $e) {
            // Ignorer l'erreur si la table n'existe pas
        }
    }

    /**
     * Redirige vers le dashboard approprié selon le rôle
     */
    protected function redirectToDashboard($role)
    {
        switch ($role) {
            case 'admin':
                return redirect()->to('admin/dashboard');
            case 'teacher':
                return redirect()->to('enseignant/dashboard');
            case 'student':
                return redirect()->to('etudiant/dashboard');
            default:
                return redirect()->to('accueil');
        }
    }
}
