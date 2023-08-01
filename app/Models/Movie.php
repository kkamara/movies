<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class Movie extends Model
{
    use HasFactory;

    protected ?Client $client = null;

    protected ?string $apiKey = null;

    protected ?string $apiHost = null;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->client = new Client();
        $this->apiKey = config('app.config.movies_key');
        $this->apiHost = config('app.config.movies_api');
    }

    public function searchApi(string $query, ?int $page=1) {
        try {
            $response = $this->client->request(
                'GET', 
                "https://movie-database-alternative.p.rapidapi.com/?s=$query&r=json&page=$page", 
                [
                    'headers' => [
                        'X-RapidAPI-Host' => 'movie-database-alternative.p.rapidapi.com',
                        'X-RapidAPI-Key' => 'f339b4dde8msh3f3d5d13cd057dep151024jsneb855d176177',
                    ],
                ]
            );
            
            return json_decode((string) $response->getBody());
        } catch (RequestException $err) {
            Log::danger($err->getMessage());
            return false;
        }
    }
}
