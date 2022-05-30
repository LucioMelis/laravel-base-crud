@extends('layout')

@section('title')
    New Comics
@endsection

@section('content')
    <div class="container-bg-main-bottom">
        <div class="content-dc-series">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="container-input">
                    <div>
                        <label for="title">1.Inserisci il titolo del Fumetto :</label>
                        <input type="text" name="title">
                    </div>

                    <div>
                        <label for="price">2.Inserisci il prezzo :</label>
                        <input type="text" name="price">
                    </div>
                    <div>
                        <label for="series">3.Inserisci serie :</label>
                        <input type="text" name="series">
                    </div>

                    <div>
                        <label for="sale_date">4.Inserisci data vendita :</label>
                        <input type="text" name="sale_date">
                    </div>

                    <div>
                        <label for="type">5.Inserisci il tipo :</label>
                        <input type="text" name="type">
                    </div>

                    <div>
                        <label for="description">6.Inserisci descrizione :</label>
                        <textarea name="description" cols="30" rows="10"></textarea>
                    </div>
                </div>
                {{-- sezione submit --}}
                <div class="container-button">
                    <a href="{{ route('comics.create') }}">
                        <button type="submit">ADD</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
