<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
       
        // Golobal route mane api & web both register korar jonno*********

        $middleware->alias([
            'demo' => \App\Http\Middleware\DemoMiddleware::class,
            'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        ]);


        // Web Routing sudu middleware e register korar jonno****

        $middleware->group('web', [

        ]);


        // Api Routing sudu middleware e register korar jonno********

        $middleware->group('api', [

        ]);
      
      
       
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
