<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService 
{
	private $client;

	// INJECTION DE DEPENDANCE
	public function __construct(HttpClientInterface $client)
	{
		$this->client = $client;
	}

    public function getGlobalData(): array 
    {
    	$response = $this->client->request('GET', 'https://api.covid19api.com/summary');
    	return $response->toArray(); 
    }

}
