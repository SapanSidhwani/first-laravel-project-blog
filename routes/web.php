<?php

// ----------------------------- For Routing --------------------------
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

// ----------------------------- For Controllers -------------------------

use App\Http\Controllers\UserController;

// Static
Route::get('/user', [UserController::class, 'getUser']); // Now go to the `/user`. There is no need to make the view file.

//Dynamic
Route::get('/username/{name}', [UserController::class, 'sayUserName']);

/*

Did you understand?
[UserController::class, 'sayUserName']: This is returning a function or we are calling a function here.

*/

Route::get('/nested-file', [UserController::class, 'useNestedFolder']);