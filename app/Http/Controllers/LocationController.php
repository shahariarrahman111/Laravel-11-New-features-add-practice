<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function dispalyLocationDetails()
    {
        $location = [
            "name"=> "Dhaka",
            "country"=> "Bangladesh",
            "population"=> "2000000",
            "timezone"=> "GMT+6",
        ];

        $seasons = ["Summer","Rain","Winter","Spring"];
        return  view("lc", ["location" => $location,"seasons" => $seasons]);
      
    }
}
