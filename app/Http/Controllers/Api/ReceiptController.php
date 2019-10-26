<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ReceiptController extends Controller
{
    /**
     * Display
     * @param Request $request
     * @return \Psr\Http\Message\StreamInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function parse(Request $request) {
        $input = $request->get('input'); // "['apple', 'orange']"
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:5000/',
            'timeout'  => 2.0,
        ]);
        $response = $client->request('POST', 'match', [
            'body' => $input
        ]);
        return $response->getBody();
    }
}
