<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LoginController extends AbstractController
{
    #[Route(
        '/student/{login}/{password}',
        name: 'login',
        defaults: ['login' => 'guest'],
        requirements: [
            'login' => '[A-Z][A-Za-z0-9]*|guest',
            'password' => '.+'
        ]
    )]
    public function login(string $login, string $password): Response
    {
        return $this->render('/login/login.html.twig', [
            'login' => $login,
            'password' => $password,
        ]);
    }
}
