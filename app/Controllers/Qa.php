<?php

namespace App\Controllers;

class Qa extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/subhead');
        echo view('front/qacontent');
        echo view('front/footer');
        echo view('front/jshomemap');
    }

    //--------------------------------------------------------------------
}
