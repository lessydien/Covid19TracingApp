<?php

namespace App\Controllers;

class Statistik extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/customheadtable');
        echo view('front/subhead');
        echo view('front/statistikcontent');
        echo view('front/footer');
        echo view('front/jsstatistik');
    }

    //--------------------------------------------------------------------
}
