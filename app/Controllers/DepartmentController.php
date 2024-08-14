<?php declare(strict_types=1);

namespace App\Controllers;

use App\Core\View;

class DepartmentController
{
    public function index(): void
    {
        View::render('department/index');
    }

    public function add(): void
    {
        View::render('department/add');
    }

    public function delete(): void
    {
        View::render('department/delete');
    }
}
