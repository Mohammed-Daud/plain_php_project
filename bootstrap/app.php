<?php
error_reporting(E_ALL);

use Symfony\Component\Dotenv\Dotenv;

//load env
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');
function env($var){
    return $_ENV[$var];
}


