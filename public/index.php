<?php

require_once('../vendor/autoload.php');

use App\Core\Router;

$routes = [
    '/worker/index' => 'WorkerController@index',
    '/worker/view' => 'WorkerController@view',
    '/worker/view/{id}' => 'WorkerController@view',
    '/worker/add' => 'WorkerController@add',
    '/department/index' => 'DepartmentController@index',
    '/department/add' => 'DepartmentController@add',
    '/department/save' => 'DepartmentController@save',
    '/department/delete/{id}' => 'DepartmentController@delete',
];

Router::exec($routes);