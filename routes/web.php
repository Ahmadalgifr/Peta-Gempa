<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Province;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/peta',[PetaController::class, 'index']);

Route::get('/gempa', function () {
    return view ('gempa');
});