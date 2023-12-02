<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class UserController
{
    public function getUsers(Request $request, Response $response)
    {
        debugger;
        // Lógica para obtener y devolver todos los usuarios
        $usuarios = ['usuario1', 'usuario2', 'usuario3'];
        $response->getBody()->write(json_encode($usuarios));

        echo "hello world";

        return $response->withHeader('Content-Type', 'application/json');
    }

}

?>