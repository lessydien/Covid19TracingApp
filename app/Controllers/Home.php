<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/custommapcss');
        echo view('front/subhead');
        echo view('front/homecontent');
        echo view('front/footer');
        echo view('front/jshomemap');
    }

    //--------------------------------------------------------------------
}
