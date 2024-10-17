<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class First
{
    #[Route('/first/{query}', name: 'first', methods: 'POST')]
    public function synonyms(Request $request, string $query): \Symfony\Component\HttpFoundation\Response
    {
        if ($request->headers->has('force_fail')) {
            return new JsonResponse([
                'error' => 'Forced Fail',
            ],
                $request->headers->get('force_fail'));
        }

        return new JsonResponse([
            'query' => $query,
        ], 200);
    }
}