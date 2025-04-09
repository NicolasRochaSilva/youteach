<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    #[Route('/api/hello', name: 'api_hello', methods: ['GET'])]
    public function hello(): JsonResponse
    {
        return $this->json([
            'mensagem' => 'Hello, World!'
        ]);
    }
}