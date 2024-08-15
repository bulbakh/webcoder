<?php
return [
    '/' => 'WorkerController@index',

    '/worker' => 'WorkerController@index',
    '/worker/index' => 'WorkerController@index',
    '/worker/view/{id}' => 'WorkerController@view',
    '/worker/add' => 'WorkerController@add',
    '/worker/save' => 'WorkerController@save',

    '/department' => 'DepartmentController@index',
    '/department/index' => 'DepartmentController@index',
    '/department/add' => 'DepartmentController@add',
    '/department/save' => 'DepartmentController@save',
    '/department/delete/{id}' => 'DepartmentController@delete',
];