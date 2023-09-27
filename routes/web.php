<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\KorisniciController;

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
});

/*
Route::get("korisnik/profil", function()
{
    return "Ovo je moj korisnički profil";
})->middleware("check.logged.user");
*/

// ruta za navigaciju na popis korisnika
Route::get("/korisnici", "KorisniciController@index"); //KorisniciController je datoteka, nije klas (pa ne treba use)
