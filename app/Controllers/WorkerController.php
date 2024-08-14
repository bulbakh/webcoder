<?php declare(strict_types=1);

namespace App\Controllers;

use App\Core\Router;
use App\Core\View;
use App\Models\Department;
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
        $department = new Department();
        $departments = $department->select();
        View::render('worker/add', compact('departments'));
    }

    public function save(): void
    {
        $msgs = [];
        $request = $_REQUEST;
        if (!empty($request['email'])) {
            $worker = new Worker();

            $emails = $worker->selectEmails();

            if (!in_array($request['email'], $emails)) {
                $res = $worker->save($request);
                if ($res) {
                    Router::redirect('/worker/index');
                } else {
                    $msgs[] = ['type' => 'error', 'text' => ' Failed to insert worker!'];
                }
            } else {
                $msgs[] = ['type' => 'error', 'text' => ' Failed to insert worker with email ' . $request['email']];
            }
        } else {
            $msgs[] = ['type' => 'error', 'text' => 'Required field name!'];
        }
        $department = new Department();
        $departments = $department->select();
        View::render('worker/add', compact('msgs', 'request', 'departments'));
    }

    public function view($id): void
    {
        $worker = new Worker();
        $worker = $worker->selectWithDepartment((int)$id);
        $worker = reset($worker);
        View::render('worker/view', compact('worker'));
    }
}
