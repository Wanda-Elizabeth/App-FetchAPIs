<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;


class MakeupsController extends Controller
{
    public function showMakeup()
    {
        $MakeupArray= [];
    
        $response = Http::withoutVerifying()->get('https://makeup-api.herokuapp.com/');
       
        $makeups = $response->json();
        
        return view('auth.makeups', compact('makeups'));
       
    }
}    
    