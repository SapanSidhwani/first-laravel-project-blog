<?php

// ----------------------------- For Routing --------------------------

use App\Http\Controllers\FileUpload;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\App;

Route::get('/home', function () {
    return view('home');
});

Route::view('contact-us', 'contact-us');

Route::get('/', function () {
    return redirect('/en');
});
// Route::get('/{lang}', function ($lang) {
//     App::setLocale($lang);
//     return view('welcome');
// });

// Dynamic routing
Route::get('/sound/{name}', function ($name) {
    return view('sound', ['name' => $name]);
});

// For redirection
// Route::redirect('/', '/home');

// For view
// Route::view('/', 'home');

Route::view('/static-data-to-page', 'username', ['name' => 'Sapan Sidhwani']); // http://127.0.0.1:8000/static-data-to-page

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
use App\Http\Middleware\AgeCheck;

// Static
Route::get('/user', [UserController::class, 'getUser']); // Now go to the `/user`. There is no need to make the view file.

Route::get('/form/{id}', [UserController::class, 'getForm']); // http://localhost:8000/form/3?name=sapan&age=21

//Dynamic
Route::get('/username/{name}', [UserController::class, 'sayUserName']);

Route::get('/users', [UserController::class, 'users']);

/*

Did you understand?
[UserController::class, 'sayUserName']: This is returning a function or we are calling a function here.

*/

Route::get('/nested-file', [UserController::class, 'useNestedFolder']);

Route::view('/user-form', 'user-form');
Route::post('/add-user', [UserController::class, "addUser"]);

Route::view('/url1', 'url1'); //  http://localhost:8000/url1?name=sapan


/*

Route::view('/student/home', 'home');
Route::get('/student/list', [HomeController::class, 'show']);
Route::get('/student/add', [HomeController::class, 'add']);

Alternative

*/

Route::get("students", [StudentController::class, "getStudents"]);

// 'student' is better than '/student' in url because '/student' can occur anywhere but in 'student' it should be at the start
Route::prefix("student")->group(function () {
    Route::view('/home', 'home');

    Route::controller(HomeController::class)->group(function () {
        Route::get('/list', 'show');
        Route::get('/add', 'add');
        Route::get('/delete/{id}', 'delete');
    });
});

Route::get("/checkmiddleware", function () {
    return view('checkmiddleware');
});


// To apply group of middleware at 

// 1. Single route
// Route::get("/ageAndCountryCheck", function () {
//     return view('ageAndCountryCheck');
// })->middleware("ageAndCountryCheck");

// 2. Multiple routes
// Route::middleware('ageAndCountryCheck')->group(function () {
//     Route::get('/list', 'show');
//     Route::get('/add', 'add');
//     Route::get('/delete/{id}', 'delete');
// });

// Assign middleware at single route
Route::get('ageAndCountryCheck', function () {
    return view('ageAndCountryCheck');
})->middleware(AgeCheck::class);


/*

Both are same:

Route::get('user', [UserController::class, 'any']);
Route::post('user', [UserController::class, 'any']);
Route::put('user/{id}', [UserController::class, 'any']);
Route::delete('user/{id}', [UserController::class, 'any']);;

Any method:
Route::any('user', [UserController::class, 'any']);

Match method:
Route::match(['get', 'post'], 'user', [UserController::class, 'any']);
Route::match(['put', 'delete'], 'user', [UserController::class, 'any']);
*/

Route::view('file-upload', 'file-upload'); // http://localhost:8000/file-upload
Route::post('store-file', [FileUpload::class, 'storeFile']);

Route::view('register-student', 'register-student');
Route::post('add-student', [StudentController::class, 'addStudent']);
Route::get('delete-student/{id}', [StudentController::class, 'deleteStudent']);
Route::get('student-details/{id}', [StudentController::class, 'studentDetails']);
Route::put('edit-student/{id}', [StudentController::class, 'editStudent']);

Route::get('/search', [StudentController::class, 'search']);