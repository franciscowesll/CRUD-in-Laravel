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
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class, 'index']);

Route::get('/new_contact', [EventController::class, 'newContact']);

Route::post('/contacts', [EventController::class, 'store']);


Route::get('/edit', function () {
    return view('edit');
});

Route::get('/details', [EventController::class, 'details']);
