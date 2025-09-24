<?php

use App\Controller\AppController;
use App\Controller\Error\ErrorController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\LogoutController;
use App\Controller\TelainicialController;


$router = [
    'routes' => [
        '/' => AppController::class,
        '/error' => ErrorController::class,
        '/login'=> LoginController::class,
        '/logout'=> LogoutController::class,
        '/tela-inicial'=> TelainicialController::class,
    ],
    'default' => NotFoundController::class
];
