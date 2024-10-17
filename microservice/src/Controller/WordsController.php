<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class WordsController
{
    #[Route('/words/{word}/synonyms', name: 'synonyms', methods: 'POST')]
    public function synonyms(string $word): \Symfony\Component\HttpFoundation\Response {
        return new JsonResponse([
            'word' => $word,
        ], 200);
    }
}