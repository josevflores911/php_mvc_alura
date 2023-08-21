<?php

declare(strict_types=1);

return [
    'GET|/'=> \Alura\Mvc\Controller\VideoListController::class,
    'GET|/nuevo-video' => \Alura\Mvc\Controller\VideoFormController::class,
    'POST|/nuevo-video' => \Alura\Mvc\Controller\NewVideoController::class,
    'GET|/editar-video'=> \Alura\Mvc\Controller\VideoFormController::class,
    'POST|/editar-video'=> \Alura\Mvc\Controller\EditVideoController::class,
    'GET|/login' =>\Alura\Mvc\Controller\LoginFormController::class,
    'POST|/login' =>\Alura\Mvc\Controller\LoginController::class,
];
