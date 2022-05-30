<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficheController extends AbstractController
{
    #[Route('/affiche', name: 'app_affiche')]
    public function index(): Response
    {
        return $this->render('affiche/index.html.twig', [
            'test_name' => 'aucun',
            'name' => 'aucun',
        ]);
    }
    #[Route('/affiche/{nom}', name: 'app_affiche2')]
    public function index2($nom): Response
    {
        return $this->render('affiche/index.html.twig', [
            'test_name' => $nom,
            'name' => 'aucun',
        ]);
    }
}
