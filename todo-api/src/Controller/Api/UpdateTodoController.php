<?php

namespace App\Controller\Api;

use App\Entity\Todos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Attribute\AsController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

// #[AsController]
// #[Route('/api/todos/{id}', name: 'api_update_todo', methods: ['PUT', 'PATCH'])]
// class UpdateTodoController extends AbstractController
// {
//     public function __invoke(int $id, Request $request, EntityManagerInterface $em, ValidatorInterface $validator): JsonResponse
//     {
//         $todo = $em->getRepository(Todos::class)->find($id);

//         if (!$todo) {
//             return $this->json(['error' => 'Todo not found'], 404);
//         }

//         $data = json_decode($request->getContent(), true);

//         if (isset($data['title'])) {
//             $todo->setTitle($data['title']);
//         }
//         if (isset($data['description'])) {
//             $todo->setDescription($data['description']);
//         }
//         if (isset($data['finished'])) {
//             $todo->setFinished($data['finished']);
//         }

//          $errors = $validator->validate($todo);

//         if (count($errors) > 0) {
//             $violations = [];
//             foreach ($errors as $error) {
//                 $violations[] = [
//                     'property' => $error->getPropertyPath(),
//                     'message' => $error->getMessage(),
//                 ];
//             }
//             return $this->json(['errors' => $violations], 400);
//         }

//         $em->flush();

//         return $this->json($todo, 200, [], ['groups' => 'todo:read']);

//     }
// }