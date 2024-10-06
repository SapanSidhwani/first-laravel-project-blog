<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

// Dynamic routing
Route::get('/sound/{name}', function ($name) {
    return view('sound', ['name' => $name]);
});

// For redirection
// Route::redirect('/', '/home');

// For view
// Route::view('/', 'home');

Route::get('/about', function () {
    return view('about');
});

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);