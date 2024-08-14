<?php declare(strict_types=1);

namespace App\Core;
class Router
{
    public static function exec(array $routes): void
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        foreach ($routes as $route => $action) {
            $pattern = "#^$route(?:/(\d+))?$#";
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
}