<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\GreetingGenerator;
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
    public function apiHello(string $name, LoggerInterface $logger, GreetingGenerator $generator): JsonResponse
    {
        $greeting = $generator->getRandomGreeting();
        $logger->info("Saying $greeting to $name!");
        return $this->json([
            'hello' => $greeting,
            'name' => $name,
        ]);
    }
}