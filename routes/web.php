<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProizvodController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/onama', function () {
    return view('frontend.onama');
});

Route::get('/proizvodi', function () {
    return view('user.proizvodi');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/proizvodi', [ProizvodController::class, 'indexone']);
Route::get('/proizvod', [AdminController::class, 'proizvod']);
Route::post('/uploadproizvoda', [AdminController::class, 'uploadproizvoda']);
Route::get('/prikaziproizvod', [AdminController::class, 'prikaziproizvod']);
Route::get('/obrisiproizvod/{id}', [AdminController::class, 'obrisiproizvod']);
Route::get('/osvjeziproizvod/{id}', [AdminController::class, 'osvjeziproizvod']);
Route::post('/osvjeziproizvod2/{id}', [AdminController::class, 'osvjeziproizvod2']);
Route::get('/search', [HomeController::class, 'search']);
Route::post('/dodaj/{id}', [HomeController::class, 'dodaj']);
Route::get('/prikazikosaricu', [HomeController::class, 'prikazikosaricu']);
Route::get('/obrisi/{id}', [HomeController::class, 'obrisikosaricu']);
Route::post('/narudzba', [HomeController::class, 'potvrdinarudzbu']);
Route::get('/prikazinarudzbu', [AdminController::class, 'prikazinarudzbu']);
Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);
URL::forceRootUrl('http://studenti.sum.ba/projekti/rwa/2023/g20');
