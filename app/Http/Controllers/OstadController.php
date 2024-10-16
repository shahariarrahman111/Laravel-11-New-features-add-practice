<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OstadController extends Controller
{
    //

    public function weather($location){
        $weatherDetails = Http::get("https://wttr.in/{$location}");
        return $weatherDetails ;
    }
}

