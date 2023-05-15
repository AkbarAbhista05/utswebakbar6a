<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('contact');
        echo view('template/footer');

    }
}
