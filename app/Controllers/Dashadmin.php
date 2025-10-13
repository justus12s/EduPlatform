<?php

namespace App\Controllers;

class Dashadmin extends BaseController
{
    public function index(): string
    {
        return view('dashboard/admin/index');
    }

    public function profile(): string
    {
        return view('dashboard/admin/profile');
    }

    public function notes(): string
    {
        return view('dashboard/admin/notes');
    }

    public function cours(): string
    {
        return view('dashboard/admin/cours');
    }

    public function teacher(): string
    {
        return view('dashboard/admin/teacher');
    }

    public function student(): string
    {
        return view('dashboard/admin/student');
    }
}
