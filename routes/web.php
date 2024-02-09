<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PokemonController as GuestPokemonController;

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

Route::get('/', function () { return view('layouts.app'); });

Route::get('/pokemons', [GuestPokemonController::class, 'index'])->name('guest.pokemons.index');
Route::get('/pokemons/{pokemon}', [GuestPokemonController::class, 'show'])->name('guest.pokemons.show');
Route::get('/pokemons/create', [GuestPokemonController::class, 'create'])->name('guest.pokemons.create');
