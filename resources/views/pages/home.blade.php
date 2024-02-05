@extends('layout.app')

@section('main-content')
<section id="content">
    <div class="container">
        <div class="current-series">
            <p>CURRENT SERIES</p>
        </div>
    </div>
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

{{-- <script>
    import Cardslist from '../components/Cardslist.vue';
    import jsonData from '../assets/vue-dc-comics-2/dc-comics.json';
    
    export default {
        name: 'Appmain',
        components: {
            Cardslist,
        },
        data() {
            return {
                comicsData: [],
            };
        },
        created() {
            this.comicsUpload();
        },
        methods: {
            comicsUpload() {
                this.comicsData = jsonData;
            }
        },
    };
</script> --}}
    
    <style lang="scss" scoped>
    .last-comic-img {
        height: 1.7rem;
    }
    
    #content {
        background-image: url('../assets/vue-dc-comics-1/img/jumbotron.jpg');
        background-size: cover;
        background-position: top;
    }
    
    .container {
        padding: 3rem 1rem;
    }
    </style>    
@endsection

