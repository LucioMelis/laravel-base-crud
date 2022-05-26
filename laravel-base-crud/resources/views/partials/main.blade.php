<main>
    <!-- container-Jumbotron  -->
    <div class="container-bg_main-top">
        <div class="label-main-top">CURRENT SERIES</div>
    </div>
    <!-- container Comics  -->
    <div class="container-bg-main-bottom">
        <div class="content-dc-series">
            @foreach ($comics as $comic)
                <div class="card-fumetto">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic->getImage() }}" alt="{{ $comic->title }}" />
                        <p>{{ $comic->title }}</p>
                    </a>
                    <a href="{{ route('comics.edit', $comic->id) }}">
                        <button class="edit">Edit</button>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container-button">
            <a href="{{ route('comics.create') }}">
                <button>ADD COMIC</button>
            </a>
        </div>
    </div>
</main>
