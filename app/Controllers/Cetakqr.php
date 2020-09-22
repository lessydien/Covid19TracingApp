<?php

namespace App\Controllers;

class Cetakqr extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/subhead');
        echo view('front/qrcontent');
        echo view('front/footer');
        echo view('front/jshomemap');
    }

    //--------------------------------------------------------------------
}
