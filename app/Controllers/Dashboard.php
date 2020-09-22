<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo  view('dashboard/template/header');
        echo  view('dashboard/template/nav');
        echo  view('dashboard/template/navtop');
        echo  view('dashboard/dashboardcontent');
        echo  view('dashboard/template/footer');
        echo  view('dashboard/tracewargajs');
    }

    public function tracing()
    {
        echo  view('dashboard/template/header');
        echo  view('dashboard/template/nav');
        echo  view('dashboard/template/navtop');
        echo  view('dashboard/tracewargasearch');
        echo  view('dashboard/template/footer');
        echo  view('dashboard/tracewargajs');
    }

    public function warga()
    {
        echo  view('dashboard/template/header');
        echo  view('dashboard/template/nav');
        echo  view('dashboard/template/navtop');
        echo  view('dashboard/wargasearch');
        echo  view('dashboard/template/footer');
        echo  view('dashboard/tracewargajs');
    }

    public function tambahwarga()
    {
        echo  view('dashboard/template/header');
        echo  view('dashboard/template/nav');
        echo  view('dashboard/template/navtop');
        echo  view('dashboard/tambahwarga');
        echo  view('dashboard/template/footer');
        echo  view('dashboard/tracewargajs');
    }

    public function status()
    {
        echo  view('dashboard/template/header');
        echo  view('dashboard/template/nav');
        echo  view('dashboard/template/navtop');
        echo  view('dashboard/wargasearch');
        echo  view('dashboard/template/footer');
        echo  view('dashboard/tracewargajs');
    }

    public function laporan()
    {
        echo  view('dashboard/template/header');
        echo  view('dashboard/template/nav');
        echo  view('dashboard/template/navtop');
        echo  view('dashboard/tracewargasearch');
        echo  view('dashboard/template/footer');
        echo  view('dashboard/tracewargajs');
    }

    public function logout()
    {
        return redirect()->to(base_url('/login'));
    }

    //--------------------------------------------------------------------
}
