<?php

const APP_NAME = 'WebCoder Test Task';

const DB_HOST = 'mysql-8.2';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'webcoder';

const ROOT_DIR = __DIR__;
const VIEWS_DIR = ROOT_DIR . '/app/Views/';








function dbg($var,$label='')
{
    echo $label .'<pre>';
    print_r($var);
    echo '</pre>';
}

function dbgd($var)
{
    dbg($var);
    die;
}