<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    #[Route('/', methods: ['GET'])]
    public function index(): Response
    {
        return new Response("Hello!");
    }
    #[Route('/hello/{name}', methods: ['GET'])]
    public function hello(string $name): Response
    {
        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/api/hello/{name}', methods: ['GET'])]
    public function apiHello(string $name): JsonResponse
    {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
        ]);
    }
}