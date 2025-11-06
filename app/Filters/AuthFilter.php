<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Vérifier si l'utilisateur est connecté
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('auth/login')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
        }

        // Vérifier les rôles spécifiques si demandés
        if (!empty($arguments)) {
            $userRole = session()->get('user_role');

            // Remplacer le mapping des rôles par :
            $roleMapping = [
                'admin' => 'admin',
                'enseignant' => 'teacher',
                'étudiant' => 'student',
                'teacher' => 'teacher',
                'student' => 'student'
            ];

            $userRole = $roleMapping[$userRole] ?? $userRole;

            if (!in_array($userRole, $arguments)) {
                // Rediriger vers le dashboard approprié
                switch ($userRole) {
                    case 'admin':
                        return redirect()->to('admin/dashboard')->with('error', 'Accès non autorisé.');
                    case 'teacher':
                        return redirect()->to('enseignant/dashboard')->with('error', 'Accès non autorisé.');
                    case 'student':
                        return redirect()->to('etudiant/dashboard')->with('error', 'Accès non autorisé.');
                    default:
                        return redirect()->to('auth/login')->with('error', 'Accès non autorisé.');
                }
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Aucune action après la requête
    }
}
