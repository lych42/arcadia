<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AnimalRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(AnimalRepository $animalRepository): Response
    {
        $animaux = $animalRepository->findAll();

        return $this->render('home/index.html.twig', [
            'animaux' => $animaux, 
        ]);
    }
}
