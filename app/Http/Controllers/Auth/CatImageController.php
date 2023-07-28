<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CatImageController extends Controller
{
    public function index()
    {
        $CatsArray= [];
        $apiKey = '2TCBEpwc7YcLN4AtKLHJ3mZvHRk_2PyL6TRL5jL1kF9VeVyn';
    
        $response = Http::withoutVerifying()->get('https://api.thecatapi.com/v1/images/search?limit=10');
       
        $catImages = $response->json();
        
        return view('auth.index', compact('catImages')); 
    }
}    