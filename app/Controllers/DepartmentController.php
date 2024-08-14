<?php declare(strict_types=1);

namespace App\Controllers;

use App\Core\Router;
use App\Core\View;
use App\Models\Department;

class DepartmentController
{
    public function index(): void
    {
        $department = new Department();
        $departments = $department->select();
        View::render('department/index', compact('departments'));
    }

    public function add(): void
    {
        View::render('department/add');
    }

    public function save(): void
    {
        $msgs = [];
        $request = $_REQUEST;
        if (!empty($request['name'])) {
            $department = new Department();
            $res = $department->save($request);
            if ($res) {
                Router::redirect('/department/index');
            } else {
                $msgs[] = ['type' => 'error', 'text' => ' Failed to insert department!'];
            }
        } else {
            $msgs[] = ['type' => 'error', 'text' => 'Required field name!'];
        }
        View::render('department/add', compact('msgs'));
    }

    public function delete($query, $id): void
    {
        if (empty($id)) {
            View::render('main/404');
        }
        $department = new Department();
        if (!$department->delete((int)$id)) {
            $msgs[] = ['type' => 'error', 'text' => ' Failed to delete department id = ' . $id];
            View::render('404', compact('msgs'));
        }
        Router::redirect('/department/index');
    }
}
