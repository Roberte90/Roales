<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HotelService 
{
    private HttpClientInterface $httpClient;
    
    public function __construct(HttpClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function getHotels() {
        return $this->httpClient->request(
            'GET', 
            'https://travel-advisor.p.rapidapi.com/hotels/list', 
            [
                'headers' => [
                    'X-RapidAPI-Key' => '521a385788msh43548d0f0b838a7p131255jsn98ac62dc38d9',
	                'X-RapidAPI-Host' => 'travel-advisor.p.rapidapi.com'
                ], 
                'query' => [
                    'location_id' => '293919',
                    'adults' => '1',
                    'rooms' => '1',
                    'nights' => '2',
                    'offset' => '0',
                    'currency' => 'USD',
                    'order' => 'asc',
                    'limit' => '30',
                    'sort' => 'recommended',
                    'lang' => 'en_US'
                ]
            ]);
    }
}

