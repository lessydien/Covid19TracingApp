<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('dashboard/auth/header');
        echo view('dashboard/auth/login');
    }

    //--------------------------------------------------------------------
}
