@extends('layouts.app')

@section('content')
    <div class="container-blu"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <img src="{{ $comic->thumb }}" class="img-show">
                </div>
                <div class="row position my-5">
                    <div class="d-flex justify-content-center">
                        <div class="col-7 me-5">
                            <h2>{{ $comic->title }}</h2>
                            <div class="button-green d-flex justify-content-between align-items-center my-3">
                                <p class="ps-3">Prezzo: {{ $comic->price }} €</p>
                                <p class="bg-success">AVAILABLE</p>
                                <p class="pe-3">Check Availability</p>
                            </div>
                            <p>{{ $comic->description }}</p>
                        </div>
                        <div class="col-2">
                            <img src="{{ Vite::asset('public/adv.jpg') }}" class="img-adv">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-5 ext-primary-emphasis">
            <div class="col-6">
                <h4>Talent</h4>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Artista:</span>
                    </div>
                    <div class="col-8 px-5 text-primary">
                        <span>{{ $comic->artists }},</span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Scritto da:</span>
                    </div>
                    <div class="col-8 px-5 text-primary">
                        <span>{{ $comic->writers }},</span>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4>Specs</h4>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Series:</span>
                    </div>
                    <div class="col-8 px-5 text-primary text-uppercase">
                        <span>{{ $comic->series }}</span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Prezzo:</span>
                    </div>
                    <div class="col-8 px-5 text-primary text-uppercase">
                        <span>{{ $comic->price }}</span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Data Pubblicazione:</span>
                    </div>
                    <div class="col-8 px-5 text-primary text-uppercase">
                        <span>{{ $comic->sale_date }}</span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-sm btn-success fw-bold text-white mx-3">
                    <a class="unstyled" href="{{ route('comics.index', $comic->id) }}">Torna alla Home</a>
                </button>
                <button class="btn btn-sm btn-warning fw-bold text-white mx-3">
                    <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                </button>
                {{-- Delete Button --}}
                <form action="{{ route('comics.destroy', $comic) }}" method="POST"
                    onsubmit="return confirm('Sei sicuro di voler cancellare questo elemento?')" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mx-2">Elimina Elemento</button>
                </form>
            </div>
        </div>
    @endsection
