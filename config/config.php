<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/functions.php';

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__.'/../.env');

date_default_timezone_set($_ENV['TIMEZONE']);

if (empty(getenv('API_TOKEN')){
$api = $_ENV['BOT_API'];
} else {
$api = getenv('BOT_TOKEN');
}

if (empty(getenv('ADMINS')) {
$admin = $_ENV['ADM_CHATID'];
} else {
$admin = getenv('ADMINS');
}