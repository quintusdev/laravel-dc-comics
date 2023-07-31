@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Comics</h1>
            </div>
        </div>
        <div class="row my-3">
            @foreach ($comics as $comic)
                <div class="col-4 ">
                    <div class="card p-3 mb-3">
                        <a href="">
                            <a href="{{ Route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}" alt="">
                                <h5>Ttolo: {{ $comic->series }}</h5>
                            </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
