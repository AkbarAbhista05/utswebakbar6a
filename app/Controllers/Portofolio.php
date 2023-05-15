<?php

namespace App\Controllers;

class Portofolio extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('portofolio');
        echo view('template/footer');

    }
}
