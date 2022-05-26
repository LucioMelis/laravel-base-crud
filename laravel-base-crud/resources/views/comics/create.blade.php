@extends('layout')

@section('content')
    <div class="container-bg-main-bottom">
        <div class="content-dc-series">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf



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
