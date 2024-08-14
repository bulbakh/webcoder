<?php

namespace App\Controllers;
use App\Core\View;

class WorkerController
{
    public function __construct()
    {
    }

    public function index()
    {
        View::render('worker/index');
    }
    public function view()
    {
        echo "Hello, World!";
    }
} 
