<?php

namespace App\Models;

use CodeIgniter\Model;

class Nyt_model extends Model
{
    // API base URL and key from (https://developer.nytimes.com/apis)
    // We will retreive technology news from the New York Times API
    private $api_url = 'https://api.nytimes.com/svc/topstories/v2/technology.json';
    private $api_key = 'SsGA02Kz9jjB6xIrIMyGC6vTzfNAZgfc';

    // Main function to connect to API and retreive data
    public function get_top_news()
    {
        // API URL
        $url = $this->api_url . '?api-key=' . $this->api_key;

        // Create a context for file_get_contents with timeout
        $context = stream_context_create([
            'http' => [
                'timeout' => 10 // 10 second timeout
            ]
        ]);

        //fetch the data and get content
        $response = file_get_contents($url, false, $context);

        // handle error
        if (!$response) {
            return []; // Return empty array instead of throwing exception
        }
        
        // decode the JSON data retrieved
        $data = json_decode($response, true);
        
        // Check if JSON decode was successful and results exist
        if (!$data || !isset($data['results'])) {
            return [];
        }
        
        // Transform the result to match the placeholders in the template
        $articles = [];

        // do a loop to get the proper data transformed into an array to be sent by the template
        foreach ($data['results'] as $article) {
                $articles[] = [
                    'title' => $article['title'],
                    'abstract' => $article['abstract'],
                    'publishedAt' => date('F j, Y, g:i a', strtotime($article['published_date'])),
                    'url' => $article['url'],
                    'urlToImage' => $article['multimedia'][1]['url'],
                ];
            }
            return $articles;
    }
}