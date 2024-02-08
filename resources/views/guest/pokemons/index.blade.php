@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($pokemons as $pokemon)
                        <div class="col">
                            <a href="{{ route('guest.pokemons.show', $pokemon->id) }}">
                                <div class="card">
                                    <img src="{{ $pokemon->thumb }}" alt="{{ $pokemon->title }} picture">
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            {{ $pokemon->name }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $pokemon->description }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $pokemon->no }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $pokemon->type }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $pokemon->weakness }}
                                        </p>
                                        <p class="text-uppercase">
                                            {{ $pokemon->strength }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection