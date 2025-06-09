<?php

namespace App\Controller\Api;

use App\Entity\Todos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/todos/{id}', name: 'read_todo', methods: ['GET'])]
class ReadTodoController extends AbstractController
{
    public function __invoke(int $id, EntityManagerInterface $em): JsonResponse
    {
        $todo = $em->getRepository(Todos::class)->find($id);

        if (!$todo) {
            return $this->json(['error' => 'Todo not found'], 404);
        }

        return $this->json($todo, 200, [], ['groups' => 'todo:read']);

    }
}