<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AttractionsService;

class AttractionsController extends AbstractController
{
    #[Route('/attractions', name: 'attractions')]
    public function index(AttractionsService $attractionsService): Response
    {
        $response = $attractionsService->getAttractions();
        dd($response->getContent());
        return $this->render('attractions/index.html.twig', [
            'controller_name' => 'AttractionsController',
        ]);
    }
}
