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

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:4', 'max:40', Rule::unique('pokemons')],
            'thumb' => ['required', 'min:4', 'url:http,https'],
            'description' => ['required', 'integer', 'min:1', 'max:10'],
            'no' => ['required', 'digits_between:1,4'],
            'type' => ['required', 'digits_between:1,4'],
            'weakness' => ['required', 'min:10', 'max:3000'],
        ], [
            'name.required' => 'La ricetta deve avere un\'immagine! Altrimenti come la postiamo su tardagram?'
        ]);

        $formData = $request->all();

        $newPokemon = new Pokemon();
        $newPokemon->name = $formData['name'];
        $newPokemon->thumb = $formData['thumb'];
        $newPokemon->description = $formData['description'];
        $newPokemon->no = $formData['no'];
        $newPokemon->type = $formData['type'];
        $newPokemon->weakness = $formData['weakness'];
        $newPokemon->strength = $formData['strength'];
        $newPokemon->save();

        // $newPokemon = Pokemon::create($formData);

        return redirect()->route('guest.pokemons.show', $newPokemon->id);
    }


    public function edit(Pokemon $pokemon)
    {
        return view('guest.pokemons.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemon $pokemon)
    {

        $request->validate([
            'name' => ['required', 'min:4', 'max:40', Rule::unique('pokemons')->ignore($pokemon->id)],
            'thumb' => ['required', 'min:10', 'max:2000'],
            'description' => ['required', 'min:4', 'url:http,https'],
            'no' => ['required', 'min:1', 'max:15'],
            'type' => ['required', 'min:10', 'max:40'],
            'weakness' => ['required', 'min:4', 'max:25'],
            'strength' => ['required', 'min:4', 'max:25'],
        ], [
            'name.required' => 'No No Nooo, inserisci il nome di un Pokemon',
            'thumb.required' => 'No No Nooo, inserisci una descrizione',
            'description.required' => 'No No Nooo, inserisci un\' immagine',
            'no.required' => 'No No Nooo, inserisci il pokemon code',
            'type.required' => 'No No Nooo, inserisci tipo di pokemon',
            'weakness.required' => 'No No Nooo, inserisci una debolezza',
            'strength.required' => 'No No Nooo, inserisci una forza',
        ]);
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
