<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ServiceRepository;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'services')]
    public function index(): Response
    {
        $services = [ ['name' => 'Visites Guidées', 'description' => 'Des visites guidées avec des experts du zoo.'], ['name' => 'Soins aux Animaux', 'description' => 'Découvrez comment nous prenons soin de nos animaux.'], ];

        return $this->render('services/index.html.twig', [
            'services' => $services,
        ]);
    }
}
