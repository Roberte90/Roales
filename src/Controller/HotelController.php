<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\HotelService;

class HotelController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(HotelService $hotelService): Response
    {
        $response = $hotelService->getHotels();
        dd($response->getContent());
        return $this->render('hotel/index.html.twig', [
            'controller_name' => 'HotelController',
        ]);
    }
}
