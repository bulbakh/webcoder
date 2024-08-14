<?php

namespace App\Core;

class View
{
    public static function render($viewName)
    {
        header("Content-Type: text/html; charset=UTF-8");
        include(VIEWS_DIR . 'header.php');
        include(VIEWS_DIR . $viewName . '.php');
        include(VIEWS_DIR . 'footer.php');
        die;
    }
}