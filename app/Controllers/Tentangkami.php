<?php

namespace App\Controllers;

class Tentangkami extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('tentangkami');
        echo view('template/footer');

    }
}