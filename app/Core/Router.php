<?php declare(strict_types=1);

namespace App\Core;

class Router
{
    private static function getRoutes(): array
    {
        return require ROOT_DIR . '/routes.php';
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
                $param = isset($matches[1]) ? (array)$matches[1] : [];
                call_user_func_array([$controller, $method], $param);
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
