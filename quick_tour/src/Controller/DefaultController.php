<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
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
    public function apiHello(string $name, LoggerInterface $logger): JsonResponse
    {
        $logger->info("Saying hello to $name!");
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
        ]);
    }
}