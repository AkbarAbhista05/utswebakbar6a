<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('service');
        echo view('template/footer');

    }
}
