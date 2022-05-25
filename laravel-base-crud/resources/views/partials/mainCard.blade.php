<main class="descriptionCard">
    <!-- container-Jumbotron  -->
    <div class="container-bg_main-top"></div>
    <!-- container Comics  -->
    <div class="banner-card">
        <div>
            <img src="{{ $comics->getImage() }}" alt="ciao">
        </div>
    </div>
    <div class="container">
        <div class="description">
            <h2>{{ strtoupper($comics->title) }}</h2>
            <div class="green-banner">
                <div class="status">
                    <p>
                        <span>U.S. Price: </span>
                        {{ $comics->price }} $
                    </p>
                    <div>AVAILABLE</div>
                </div>
                <div class="check-status">Check Availability &#9662;</div>
            </div>
            <p class="description">{{ $comics->description }}</p>
        </div>
        <div class="advertisement">
            <h5>ADVERTISEMENT</h5>
            <img src="/images/advertise.jpg" alt="advertisement">
        </div>
    </div>
</main>
