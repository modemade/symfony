<?php

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
// use Symfony\Component\Routing\Annotation\Route;

// class TaskController extends AbstractController
// {
//     #[Route('/task', name: 'app_task')]
//     public function index(): JsonResponse
//     {
//         return $this->json([
//             'message' => 'Welcome to your new controller!',
//             'path' => 'src/Controller/TaskController.php',
//         ]);
//     }
// }
namespace App\Controller;
use App\Entity\Task;
use App\Repository\CatRepository;
use App\Repository\TaskRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class TaskController extends AbstractController
{
// je rajoute à la route la méthode associée GET
#[Route('/task', name: 'app_task_index', methods: 'GET')]
public function index(
TaskRepository $taskRepository
): Response {
//récupération de toutes les taches
$tasks = $taskRepository‐>findAll();
dd($tasks);
}
}