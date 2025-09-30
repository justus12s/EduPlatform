<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function accueil(): string
    {
        return view('accueil');
    }

    public function login(): string
    {
        return view('login');
    }

    public function register(): string
    {
        return view('register');
    }
}
