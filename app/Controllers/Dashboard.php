<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('dashboard/index');
    }

    public function profile(): string
    {
        return view('dashboard/profile');
    }

    public function blank(): string
    {
        return view('dashboard/blank');
    }

    public function notes(): string
    {
        return view('dashboard/notes');
    }

    public function cours(): string
    {
        return view('dashboard/cours');
    }

    public function map_google(): string
    {
        return view('dashboard/map_google');
    }

    public function authentication_login(): string
    {
        return view('dashboard/authentication_login');
    }

    public function authentication_register(): string
    {
        return view('dashboard/authentication_register');
    }
}
