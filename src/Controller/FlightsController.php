<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FlightsService;

class FlightsController extends AbstractController
{
    #[Route('/flights', name: 'flights')]
    public function index(FlightsService $FlightsService): Response
    {
        $response = $FlightsService->getFlights();
        dd($response->getContent());
        return $this->render('flights/index.html.twig', [
            'controller_name' => 'FlightsController',
        ]);
    }
}
