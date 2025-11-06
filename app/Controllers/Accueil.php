<?php

namespace App\Controllers;

class Accueil extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'EduPlatform - Plateforme Éducative Moderne',
            'page' => 'accueil'
        ];

        return view('accueil', $data);
    }
}
