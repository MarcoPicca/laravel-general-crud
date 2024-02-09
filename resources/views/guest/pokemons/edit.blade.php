@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Modifica il pokemon:
                </h1>

                <form action="{{ route('guest.pokemons.update', $pokemon->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome del Pokemon:
                        </label>
                        <input type="text" name="name" id="name" class="form-control"  value="{{ old( 'name', $pokemon->name ) }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine:</label>
                        <input type="text" name="thumb" id="thumb" class="form-control" value="{{ old( 'thumb', $pokemon->thumb ) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old( 'description', $pokemon->description ) }}">
                    </div>
                    <div class="mb-3">
                        <label for="no" class="form-label">Codice Pokemon:</label>
                        <input type="text" name="no" id="no" class="form-control" value="{{ old( 'no', $pokemon->no ) }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di Pokemon:</label>
                        <input type="text" name="type" id="type" class="form-control" value="{{ old( 'type', $pokemon->type ) }}">
                    </div>

                    <div class="mb-3">
                        <label for="weakness" class="form-label">Punti Deboli</label>
                        <input type="text" name="weakness" id="weakness" class="form-control" value="{{ old( 'weakness', $pokemon->weakness ) }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Modifica Pokemon</button>
                </form>
            </div>
        </div>
    </section>
@endsection