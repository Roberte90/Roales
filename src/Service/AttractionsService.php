<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AttractionsService 
{
    private HttpClientInterface $httpClient;
    
    public function __construct(HttpClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }
    
    public function getAttractions() {
        return $this->httpClient->request(
            'GET', 
            'https://travel-advisor.p.rapidapi.com/attractions/list-by-latlng', 
            [
                'headers' => [
                    'X-RapidAPI-Key' => '521a385788msh43548d0f0b838a7p131255jsn98ac62dc38d9',
	                'X-RapidAPI-Host' => 'travel-advisor.p.rapidapi.com'
                ], 
                'query' => [
                    'longitude' => '109.19553',
                    'latitude' => '12.235588',
                    'lunit' => 'km',
                    'currency' => 'USD',
                    'lang' => 'en_US'
                ]
            ]);
    }
}

