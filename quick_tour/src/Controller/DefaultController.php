<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController
{
    #[Route('/', methods: ['GET'])]
    public function index(): Response
    {
        return new Response("Hello!");
    }
    #[Route('/hello/{name}', methods: ['GET'])]
    public function hello(string $name): Response
    {
        return new Response("Hello $name!");
    }
}