<?php 

namespace App\Controller\Api;

use App\Entity\Todos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/todos/{id}', name: 'api_delete_todo', methods: ['DELETE'])]

class DeleteTodoController extends AbstractController
{
    public function __invoke(int $id, EntityManagerInterface $em): JsonResponse
    {
        $todo = $em->getRepository(Todos::class)->find($id);

        if (!$todo) {
            return $this->json(['error' => 'Todo not found'], 404);
        }

        $em->remove($todo);
        $em->flush();

        return $this->json(['message' => 'Todo deleted successfully'], 204);
    }
}