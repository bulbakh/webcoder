<?php declare(strict_types=1);

namespace App\Core;
class View
{
    public static function render($viewName, $parameters = []): void
    {
        header("Content-Type: text/html; charset=UTF-8");
        include(VIEWS_DIR . 'header.php');
        include(VIEWS_DIR . $viewName . '.php');
        include(VIEWS_DIR . 'footer.php');
        die;
    }
}