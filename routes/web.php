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

Route::prefix('articles')->group(function () {
    Route::get('/', function () {
        return view('articles/index');
    });
    Route::get('/{id}', function () {
        return view('articles/view');
    });
    Route::get('/new', function () {
        // TODO: Show form to insert new
    });
    Route::post('/new', function () {
       // TODO: Save new entity
    });
    Route::put('/edit', function () {
        // TODO: Update the entity
    });
    Route::delete('/delete', function () {
        // TODO: DELETE the entity
    });
});
