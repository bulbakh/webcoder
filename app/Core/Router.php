<?php declare(strict_types=1);

namespace App\Core;

class Router
{
    private static function getRoutes(): array
    {
        return [
            '/worker' => 'WorkerController@index',
            '/worker/index' => 'WorkerController@index',
            '/worker/view' => 'WorkerController@view',
            '/worker/view/{id}' => 'WorkerController@view',
            '/worker/add' => 'WorkerController@add',
            '/worker/save' => 'WorkerController@save',

            '/department' => 'DepartmentController@index',
            '/department/index' => 'DepartmentController@index',
            '/department/add' => 'DepartmentController@add',
            '/department/save' => 'DepartmentController@save',
            '/department/delete/{id}' => 'DepartmentController@delete',
        ];
    }

    public static function exec(): void
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        foreach (self::getRoutes() as $route => $action) {
            $route = preg_replace('#/{.*}#', '/(\d+)', $route);
            $pattern = "#^$route/?$#";
            if (preg_match($pattern, $requestUri, $matches)) {
                list($controllerClass, $method) = explode('@', $action);
                $controllerClass = 'App\Controllers\\' . $controllerClass;
                $controller = new $controllerClass();
                call_user_func_array([$controller, $method], $matches);
                break;
            }
        }
        call_user_func_array(['App\Controllers\BaseController', 'page404'], []);
    }

    public static function redirect(string $route): void
    {
        header("Location: $route");
        exit;
    }
}
