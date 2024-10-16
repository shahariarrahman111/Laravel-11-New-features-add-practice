<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OstadController;
use App\Http\Controllers\PersonController;
use App\Http\Middleware\SimpleMiddleware;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/weather/{location}', [OstadController::class,'weather'])->name('weather.{location}');


Route::get('/person/{name?}', [PersonController::class,'getPerson'])->whereAlpha("name");

Route::get("/persons/{id?}", [PersonController::class, "getPersonById"])->whereNumber("id");


Route::get("/person/{name?}/accountId/{accountId?}", [PersonController::class,"personAccount"])->whereAlpha("name")->whereNumber("accountId");

Route::get("/personS", [PersonController:: class, "personForm"]);
Route::post("/personS", [PersonController::class,"personData"]);


Route::get("/hi", [PersonController::class,"securitySub"])->middleware("simple");


//  Middleware Route Starte To Prectice*************


Route::middleware(['demo'])->group(function () {

    Route::get("/demmon1/{key}", [DemoController::class,"Demo1"]);
    Route::get("/demmon2/{key}", [DemoController::class,"Demo2"]);
    Route::get("/demmon3/{key}", [DemoController::class,"Demo3"]);
    Route::get("/demmon4/{key}", [DemoController::class,"Demo4"]);

});

Route::get("/limit", [DemoController::class,"lateLimiting"])->middleware('throttle:8,1');

Route::get('/Registration', [UserController::class, 'userRegistration']);
