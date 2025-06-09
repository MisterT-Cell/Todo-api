<?php

namespace App\Controller\Api;

use App\Entity\Todos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Attribute\AsController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/todos', name: 'api_create_todo', methods: ['POST'])]
#[AsController]
class CreateTodoController extends AbstractController {

    public function __invoke(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): JsonResponse {
        
        $data = json_decode($request->getContent(), true);

        $todo = new Todos();
        $todo->setTitle($data['title'] ?? '');
        $todo->setDescription($data['description'] ?? null);
        $todo->setFinished($data['finished'] ?? false);

        $errors = $validator->validate($todo);

        if (count($errors) > 0) {
            $violations = [];
            foreach ($errors as $error) {
                $violations[] = [
                    'property' => $error->getPropertyPath(),
                    'message' => $error->getMessage(),
                ];
            }
            return $this->json(['errors' => $violations], 400);
        }

        $em->persist($todo);
        $em->flush();

        return $this->json($todo, 201);
    }
}