<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/new-enquiry-guest', function () {
    return view('enquiry.new-enquiry-guest');
});

Route::get('/new-enquiry-aspirant', function () {
    return view('enquiry.new-enquiry-aspirant');
});