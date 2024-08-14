<?php declare(strict_types=1);

namespace App\Controllers;

use App\Core\View;

class WorkerController
{
    public function index(): void
    {
        View::render('worker/index');
    }

    public function add(): void
    {
        View::render('worker/add');
    }

    public function view(): void
    {
        View::render('worker/view');
    }
} 
