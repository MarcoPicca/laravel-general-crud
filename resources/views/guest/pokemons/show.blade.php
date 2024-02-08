@extends('layouts.app')

@section('main-content')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $pokemon->name }}
                            </h1>
                            <p>
                                Immagine: {{ $pokemon->thumb }}
                            </p>
                            <p>
                                Descrizione: {{ $pokemon->description }}
                            </p>
                            <p>
                                Codice Pokemon: {{ $pokemon->no }}mq
                            </p>

                            <p>
                                Tipo di Pokemon: {{ $pokemon->type }}
                            </p>

                            <p>
                                Punti Deboli: {{ $pokemon->weakness }}
                            </p>

                            <p>
                                Punti di Forza: {{ $pokemon->strength }}
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $pokemon->thumb }}" alt="{{ $pokemon->name }}'s picture">
                            </div>
                            <div class="actions mb-3 pt-3 d-inline-block">
                                <a href="{{ route('guest.pokemons.edit', $pokemon->id) }}">
                                    <button class="btn btn-primary">
                                        Modifica questo Pokemon
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection