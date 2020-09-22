<?php

namespace App\Controllers;

class Layanankesehatan extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/customlayanan');
        echo view('front/subhead');
        echo view('front/layanancontent');
        echo view('front/footer');
        echo view('front/jslayanan');
    }

    //--------------------------------------------------------------------
}
