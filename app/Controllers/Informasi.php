<?php

namespace App\Controllers;

class Informasi extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/subhead');
        echo view('front/informasicontent');
        echo view('front/footer');
        echo view('front/jsinformasi');
    }

    //--------------------------------------------------------------------
}
