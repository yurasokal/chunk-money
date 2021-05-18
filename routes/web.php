<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site/{name?}', function ($name = null) {

    if($name === null) {
        return view('site.index');
    } else if ($name != null) {
        $path = 'site.'.$name;
    return view($path);
    }
});

// Route::get('/hello', function () {
//     return `<h1>Hello !</h1>`;
// });

// Route::get('site/overview', function () {
//     return view('/overview');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user '.$name.' with an id of '.$id;
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// php artisan make:controller PagesController
