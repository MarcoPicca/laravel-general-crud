<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::orderBy('id', 'DESC')->get();
        return view('guest.pokemons.index', compact('pokemons'));
    }

    public function show(Pokemon $pokemon)
    {
        // $pokemon = Pokemon::findOrFail($id);
        return view('guest.pokemons.show', compact('pokemon'));
    }

    public function create()
    {
        return view('guest.pokemons.create');
    }
}
