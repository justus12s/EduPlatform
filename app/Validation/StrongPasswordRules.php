<?php

namespace App\Validation;

use Config\Services;

class StrongPasswordRules
{
    public function strong_password(string $str, string &$error = null): bool
    {
        // Au moins 8 caractères
        if (strlen($str) < 8) {
            $error = 'Le mot de passe doit contenir au moins 8 caractères.';
            return false;
        }

        // Au moins une lettre majuscule
        if (!preg_match('/[A-Z]/', $str)) {
            $error = 'Le mot de passe doit contenir au moins une lettre majuscule.';
            return false;
        }

        // Au moins une lettre minuscule
        if (!preg_match('/[a-z]/', $str)) {
            $error = 'Le mot de passe doit contenir au moins une lettre minuscule.';
            return false;
        }

        // Au moins un chiffre
        if (!preg_match('/[0-9]/', $str)) {
            $error = 'Le mot de passe doit contenir au moins un chiffre.';
            return false;
        }

        // Au moins un caractère spécial
        if (!preg_match('/[^A-Za-z0-9]/', $str)) {
            $error = 'Le mot de passe doit contenir au moins un caractère spécial.';
            return false;
        }

        return true;
    }
}