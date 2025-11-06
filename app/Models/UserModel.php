<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'institution',
        'avatar',
        'is_active',
        'email_verified',
        'remember_token',
        'remember_expires',
        'reset_token',
        'reset_expires',
        'last_access',        // ← AJOUTER CETTE LIGNE
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[users.email]',
        'first_name' => 'required|min_length[2]|max_length[50]',
        'last_name' => 'required|min_length[2]|max_length[50]',
        'role' => 'required|in_list[admin,teacher,student]',
        'password' => 'required|min_length[8]',
        'institution' => 'required|min_length[2]|max_length[100]'
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'Cet email est déjà utilisé.'
        ]
    ];

    protected $skipValidation = false;

    /**
     * Récupère un utilisateur par email
     */
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    /**
     * Récupère les utilisateurs par rôle
     */
    public function getUsersByRole($role)
    {
        return $this->where('role', $role)->findAll();
    }

    /**
     * Active un compte utilisateur
     */
    public function activateUser($userId)
    {
        return $this->update($userId, ['is_active' => 1]);
    }

    /**
     * Désactive un compte utilisateur
     */
    public function deactivateUser($userId)
    {
        return $this->update($userId, ['is_active' => 0]);
    }

    /**
     * Vérifie si un email existe
     */
    public function emailExists($email, $excludeUserId = null)
    {
        $builder = $this->where('email', $email);

        if ($excludeUserId) {
            $builder->where('id !=', $excludeUserId);
        }

        return $builder->countAllResults() > 0;
    }

    /**
     * Met à jour le dernier accès
     */
    public function updateLastAccess($userId)
    {
        return $this->update($userId, [
            'last_access' => date('Y-m-d H:i:s')
        ]);
    }
}
