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

#[AsController]
#[Route('/api/todos')]
// Deze controller is verantwoordelijk voor het aanmaken van een todo
class TodoController extends AbstractController {
    // Deze functie de todo aangemaakt
    public function create(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): JsonResponse {
        
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

        return $this->json($todo, 201, [], ['groups' => 'todo:read']);
    }

    // deze functie haalt alle todos op
    public function readCollection(EntityManagerInterface $em): JsonResponse {
            {
        $todo = $em->getRepository(Todos::class)->findAll();

        if (!$todo) {
            return $this->json(['error' => 'No todos found'], 404);
        }

        return $this->json($todo, 200, [], ['groups' => 'todo:read']);
        }
    }

    // deze functie haalt één todo op basis van ID
    public function read(Todos $todo): JsonResponse
    {
        return $this->json($todo, 200, [], ['groups' => 'todo:read']);
    }

    // deze functie update een todo op basis van ID
    public function update(Request $request, Todos $todo, EntityManagerInterface $em, ValidatorInterface $validator): JsonResponse
    {
    $data = json_decode($request->getContent(), true);

    if (isset($data['title'])) {
        $todo->setTitle($data['title']);
    }
    if (isset($data['description'])) {
        $todo->setDescription($data['description']);
    }
    if (isset($data['finished'])) {
        $todo->setFinished($data['finished']);
    }

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

    $em->flush();

    return $this->json($todo, 200, [], ['groups' => 'todo:read']);
}
    // deze functie verwijdert een todo op basis van ID
    public function delete(Todos $todo, EntityManagerInterface $em): JsonResponse
    {
    $em->remove($todo);
    $em->flush();

    return $this->json(['message' => 'Todo deleted successfully'], 200);
    }
}