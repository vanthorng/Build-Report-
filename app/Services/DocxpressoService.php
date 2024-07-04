<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class DocxpressoService
{
    protected $client;
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = env('DOCXPRESSO_API_URL');
        $this->apiKey = env('DOCXPRESSO_API_KEY');
    }

    public function generateDocument(array $data)
    {
        $response = $this->client->post($this->apiUrl . '/generate', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Accept' => 'application/json',
            ],
            'json' => $data,
        ]);

        return json_decode($response->getBody(), true);
    }

    // Add other methods to interact with Docxpresso API as needed
}
