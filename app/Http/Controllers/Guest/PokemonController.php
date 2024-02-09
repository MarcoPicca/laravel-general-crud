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

    public function edit(Pokemon $pokemon)
    {
        return view('guest.pokemons.edit', compact('pokemon'));
    }
    public function update(Request $request, Pokemon $pokemon)
    {

        $data = $request->all();

        // $pokemon = Pokemon::findOrFail($id);

        $pokemon->name = $data['title'];
        $pokemon->thumb = $data['thumb'];
        $pokemon->description = $data['description'];
        $pokemon->no = $data['no'];
        $pokemon->type = $data['type'];
        $pokemon->weakness = $data['weakness'];
        $pokemon->strength = $data['strength'];
        $pokemon->save();

        // $pokemon->update($data);

        return redirect()->route('guest.pokemons.show', $pokemon->id);
    }
}