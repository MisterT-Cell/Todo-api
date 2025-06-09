<?php

namespace App\Controller\Api;

use App\Entity\Todos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annortation\Route;

#[Route('/api/todos', name: 'read_collection_todos', methods: ['GET'])]

class ReadCollectionTodosController extends AbstractController
{
    public function __invoke(EntityManagerInterface $em): JsonResponse
    {
        $todos = $em->getRepository(Todos::class)->findAll();

        if (!$todos) {
            return $this->json(['error' => 'No todos found'], 404);
        }

        return $this->json($todos);
    }
}