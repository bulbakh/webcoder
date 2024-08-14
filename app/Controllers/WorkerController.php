<?php declare(strict_types=1);

namespace App\Controllers;

use App\Core\View;
use App\Models\Worker;

class WorkerController
{
    public function index(): void
    {
        $worker = new Worker();
        $workers = $worker->selectWithDepartment();
        View::render('worker/index', compact('workers'));
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
