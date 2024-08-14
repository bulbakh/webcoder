<?php

function dbg($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function dbgd($var)
{
    dbg($var);
    die;
}

return [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'webcoder'
];