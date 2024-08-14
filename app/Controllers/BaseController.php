<?php declare(strict_types=1);

namespace App\Controllers;

use App\Core\View;

class BaseController
{
    public static function page404(): void
    {
        http_response_code(404);
        View::render('404');
    }
}