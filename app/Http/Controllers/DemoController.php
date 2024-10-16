<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function Demo1(Request $request):string{

        return "Hello1";
    }
    
    function Demo2(Request $request):string{

        return "Hello2";
    }


    function Demo3(Request $request):string{

        return  "Hello3";
    }

    function Demo4(Request $request):string{

        return "Hello4";
    }


    function lateLimiting(Request $request):string
    {
        return "Hello, Shahariar";
    }
}
