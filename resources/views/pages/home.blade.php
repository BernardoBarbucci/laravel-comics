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
    <div class="container py-5">
        @foreach($comicsData as $index => $card)
            <div class="comic-article text-white">
                <!-- dati del fumetto -->
                <img src="{{ $card['thumb'] }}" class="comic-img mb-1" alt="{{ $card['title'] }}">
                <h3>{{ $card['title'] }}</h3>
                <p>{{ $card['price'] }}</p>
                {{-- <p>{{ $card['series'] }}</p> --}}
                {{-- <p>{{ $card['sale_date'] }}</p> --}}
                {{-- <p>{{ $card['type'] }}</p>  --}}
            </div>
        @endforeach
    </div>
</section>

<section id="categories">
    <div class="container">
        <ul class="comics-categ">
            <li class="comic-card">
                <img src="{{asset('img/laravel-comics/laravel-comics/images/buy-comics-digital-comics.png')}}" class="comic-img" alt="digital comics">
                <p class="pt-3">DIGITAL COMICS</p>
            </li>
            <li class="comic-card">
                <img src="{{asset('img/laravel-comics/laravel-comics/images/buy-comics-merchandise.png')}}" class="comic-img" alt="merchandise">
                <p class="pt-3">DC MERCHANDISE</p>
            </li>
            <li class="comic-card">
                <img src="{{asset('img/laravel-comics/laravel-comics/images/buy-comics-shop-locator.png')}}" class="comic-img" alt="locator">
                <p class="pt-3">SUBSCRIPTION</p>
            </li>
            <li class="comic-card">
                <img src="{{asset('img/laravel-comics/laravel-comics/images/buy-comics-subscriptions.png')}}" class="comic-img" alt="subs">
                <p class="pt-3">COMIC SHOP LOCATOR</p>
            </li>
            <li class="comic-card">
                <img src="{{asset('img/laravel-comics/laravel-comics/images/buy-dc-power-visa.svg')}}" class="comic-img" alt="battery">
                <p class="pt-3">DC POWER VISA</p>
            </li>
        </ul>
    </div>
</section>
    
<style lang="scss" scoped>
.comic-article {
    height: 10rem;
    width: 10rem;
    margin-right: 1rem;
    margin-left: 1rem;
    margin-bottom: 5rem;
    color: white;
    transition: transform .4s ease-in-out;

    &:hover {
        transform: scale(1.175);
        transform-origin: center center;
    }

    img {
        width: 100%;
        height: 100%;
    }

    h3 {
        font-size: .8rem;
        font-weight: 600;
    }

    p {
        font-size: .7rem;
    }
}
</style>    
@endsection