<?php declare(strict_types=1);

namespace App\Core;

class View
{
    /**
     * @param $viewName
     * @param $parameters array used in views
     * @return void
     */
    public static function render(string $viewName, $parameters = []): void
    {
        header("Content-Type: text/html; charset=UTF-8");
        $container = VIEWS_DIR . $viewName . '.php';
        include(VIEWS_DIR . 'layout.php');
        die;
    }
}
