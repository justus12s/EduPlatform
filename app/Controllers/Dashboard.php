<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('dashboard/etudiant/index');
    }

    public function profile(): string
    {
        return view('dashboard/etudiant/profile');
    }

    public function notes(): string
    {
        return view('dashboard/etudiant/notes');
    }

    public function cours(): string
    {
        return view('dashboard/etudiant/cours');
    }

    public function details(): string
    {
        return view('dashboard/etudiant/details');
    }
}
