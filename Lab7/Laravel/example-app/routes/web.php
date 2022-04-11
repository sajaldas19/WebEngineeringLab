<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('homepage');
});
Route::get('/about', function(){
    return view('about');
});
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PageController;

// Route::get('/','HomeController@Home'); Previous Versions

Route::get('/',[HomeController::class, 'Home']);

Route::get('/about',[HomeController::class, 'About']);

Route::get('/gallery',[HomeController::class, 'Gallery']);

Route::get('/contact',[HomeController::class, 'Contact']);


Route::get('/home',[PageController::class, 'Home']);

Route::get('/aboutpage',[PageController::class, 'About']);

Route::get('/gallerypage',[PageController::class, 'Gallery']);

Route::get('/contactpage',[PageController::class, 'Contact']);




Route::get('/name/{NameValue}', [DemoController::class, 'myName']);
Route::get('/name/{f_name}/{m_name}/{l_name}', [DemoController::class, 'myFullName']);

