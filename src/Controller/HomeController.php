<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AnimalRepository;
use App\Repository\ServiceRepository;
use App\Repository\HabitatRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(AnimalRepository $animalRepository, ServiceRepository $serviceRepository, HabitatRepository $habitatRepository): Response
    {
        $animaux = $animalRepository->findAll();
        $services = $serviceRepository->findAll();
        $habitats = $habitatRepository->findAll();

        return $this->render('home/index.html.twig', [
            'animaux' => $animaux, 
            'services' => $services,
            'habitats' => $habitats,
        ]);
    }
}
