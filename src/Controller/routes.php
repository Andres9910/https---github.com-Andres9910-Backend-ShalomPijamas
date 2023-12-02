<?php

use App\Controller\UserController;

$app->get('/api/usuarios', UserController::class . ':getUsers');
$app->get('/api/usuarios/{id}', UserController::class . ':getUser');
// Agrega más rutas según sea necesario

?>