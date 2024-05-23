@extends('layouts.app')

@section('content')

    <section class="card-section">
        <h1 class="title">Movies</h1>
        <div class="container">
            <div class="row row-gap-4">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card ms_card">
                            <div class="card-body text-center">
                                <p>{{ $movie->title }}</p>
                                <p>{{ $movie->original_title }}</p>
                                <p>{{ $movie->nationality }}</p>
                                <p>{{ $movie->date }}</p>
                                <p>Voto: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection