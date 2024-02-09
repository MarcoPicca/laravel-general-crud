@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Aggiungi un nuovo Pokemon:
                </h1>

                <form action="{{ route('guest.pokemons.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome del Pokemon:
                        </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">immagine:</label>
                        <input type="text" name="thumb" id="thumb" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <input type="text" name="description" id="description" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="no" class="form-label">Codice Pokemon:</label>
                        <input type="text" name="no" id="no" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di Pokemon:</label>
                        <input type="text" name="type" id="type" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="weakness" class="form-label">Punti Deboli</label>
                        <input type="text" name="weakness" id="weakness" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="strength" class="form-label">Punto di Forza</label>
                        <input type="text" name="strength" id="strength" class="form-control">
                    </div>

                    <form action="{{ route('guest.pokemons.index') }}" method="POST">
                            @csrf

                            <button type="submit" class="btn btn-primary">Aggiungi un nuovo Pokemon</button>
                    </form>
                </form>
            </div>
        </div>
    </section>
@endsection
