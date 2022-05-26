@extends('layout')

@section('content')
    <div class="container-bg-main-bottom">
        <div class="content-dc-series">
            <form action="{{ route('comics.update', $comics->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="container-input">
                    <div>
                        <label for="title">1.Modifica il titolo del Fumetto :</label>
                        <input type="text" name="title" value="{{ $comics->title }}">
                    </div>

                    <div>
                        <label for="price">2.Modifica il prezzo :</label>
                        <input type="text" name="price" value="{{ $comics->price }}">
                    </div>
                    <div>
                        <label for="series">3.Modifica serie :</label>
                        <input type="text" name="series" value="{{ $comics->series }}">
                    </div>

                    <div>
                        <label for="sale_date">4.Modifica data vendita :</label>
                        <input type="text" name="sale_date" value="{{ $comics->sale_date }}">
                    </div>

                    <div>
                        <label for="type">5.Modifica il tipo :</label>
                        <input type="text" name="type" value="{{ $comics->type }}">
                    </div>

                    <div>
                        <label for="description">6.Modifica descrizione :</label>
                        <textarea name="description" cols="30" rows="10">{{ $comics->description }}</textarea>
                    </div>
                </div>
                {{-- sezione submit --}}
                <div class="container-button">
                    <a href="{{ route('comics.create') }}">
                        <button type="submit">CONFIRM CHANGE</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
