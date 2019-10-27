<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Recipe;
use App\Http\Resources\RecipeCollection;

class ReceiptController extends Controller
{
    /**
     * Display
     * @param Request $request
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function parse(Request $request) {
        $input = $request->get('input'); // "['apple', 'orange']"
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:5000/',
            'timeout'  => 30.0,
        ]);
        $content = $client->request('POST', 'match', [
            'body' => $input
        ])->getBody()->getContents();
        $content = str_replace('\'', '"', $content);
        return response()->json(json_decode($content));
    }

    /**
     * Recommend recipes according to a list of food
     * @param Request $request
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function recommend(Request $request) {
        $input = $request->get('input'); // "['apple', 'orange']"
        $client = new Client([
            'base_uri' => 'http://127.0.0.1:5000/',
            'timeout' => 30.0,
        ]);
        $content = $client->request('POST', 'recommend', [
            'body' => $input
        ])->getBody()->getContents();
        $recipes = Recipe::all();
        $recipeIds = json_decode($content);
        return new RecipeCollection($recipes->only($recipeIds));
    }
}
