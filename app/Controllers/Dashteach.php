<?php

namespace App\Controllers;

class Dashteach extends BaseController
{
    public function index(): string
    {
        return view('dashboard/teacher/index');
    }

    public function profile(): string
    {
        return view('dashboard/teacher/profile');
    }

    public function notes(): string
    {
        return view('dashboard/teacher/notes');
    }

    public function cours(): string
    {
        return view('dashboard/teacher/cours');
    }

    public function gestion(): string
    {
        return view('dashboard/teacher/gestion');
    }
}
