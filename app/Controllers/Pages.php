<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function a_propos()
    {
        $data = [
            'title' => 'À propos - EduPlatform',
            'page' => 'a_propos'
        ];
        return view('pages/a_propos', $data);
    }

    public function fonctionnalites()
    {
        $data = [
            'title' => 'Fonctionnalités - EduPlatform',
            'page' => 'fonctionnalites'
        ];
        return view('pages/fonctionnalites', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact - EduPlatform',
            'page' => 'contact'
        ];
        return view('pages/contact', $data);
    }
}
