@extends('layout.app')

@section('main-content')
<section id="content" style="background-image: url('{{ asset("img/laravel-comics/laravel-comics/images/jumbotron.jpg") }}'); background-size: cover; background-position: top;">
    <section id="content">
        <div class="container">
            <div class="current-series">
                <p>CURRENT SERIES</p>
            </div>
        </div>
    </section>    
</section>

<section id="books">
    <div class="container">
        @foreach($comicsData as $index => $card)
            <div class="articolo">
                <!-- Visualizza i dati del fumetto qui -->
                <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                <h3>{{ $card['title'] }}</h3>
                <p>{{ $card['description'] }}</p>
                <!-- Altri dettagli del fumetto, ad esempio prezzo, serie, data di vendita, ecc. -->
            </div>
        @endforeach
    </div>
</section>

<section id="categories">
    <div class="container">
        <ul class="comics-categ">
            <li class="comic-card">
                <img src="../assets/vue-dc-comics-1/img/buy-comics-digital-comics.png" class="comic-img" alt="digital comics">
                <p>DIGITAL COMICS</p>
            </li>
            <!-- Aggiungi gli altri elementi del menu delle categorie -->
        </ul>
    </div>
</section>
    
<style lang="scss" scoped>
.last-comic-img {
    height: 1.7rem;
}    
/* #content {
    background: url('#{asset("img/laravel-comics/laravel-comics/images/jumbotron.jpg")}') no-repeat center center fixed;
    background-size: cover;
} */
</style>    
@endsection