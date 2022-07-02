<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class FlightsService 
{
    private HttpClientInterface $httpClient;
    
    public function __construct(HttpClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function getFlights() {
        return $this->httpClient->request(
            'GET', 
            'https://travel-advisor.p.rapidapi.com/airports/search', 
            [
                'headers' => [
                    'X-RapidAPI-Key' => '521a385788msh43548d0f0b838a7p131255jsn98ac62dc38d9',
                    'X-RapidAPI-Host' => 'travel-advisor.p.rapidapi.com'
                ], 
                'query' => [
                    'query' => 'new york', 
                    'locale' => 'en_US'
                ]
            ]);
    }
}
