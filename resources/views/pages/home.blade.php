@extends('layout.app')

@section('main-content')
<template>
    <section id="content">
        <div class="container">
            <div class="current-series">
                <p>CURRENT SERIES</p>
            </div>
        </div>
    </section>

    <section id="books">
        <div class="container">
            <Cardslist v-for="(card, index) in comicsData" :key="index" :card="card" class="articolo" />
        </div>
    </section>

    <section id="categories">
        <div class="container">
            <ul class="comics-categ">
                <li class="comic-card">
                    <img src="../assets/vue-dc-comics-1/img/buy-comics-digital-comics.png" class="comic-img"
                        alt="digital comics">
                    <p>DIGITAL COMICS</p>
                </li>
                <li class="comic-card">
                    <img src="../assets/vue-dc-comics-1/img/buy-comics-merchandise.png" class="comic-img" alt="merch">
                    <p>DC MERCHANDISE</p>
                </li>
                <li class="comic-card">
                    <img src="../assets/vue-dc-comics-1/img/buy-comics-subscriptions.png" class="comic-img" alt="subs">
                    <p>SUBSCRIPTION</p>
                </li>
                <li class="comic-card">
                    <img src="../assets/vue-dc-comics-1/img/buy-comics-shop-locator.png" class="comic-img"
                        alt="shops location">
                    <p>COMIC SHOP LOCATOR</p>
                </li>
                <li class="comic-card">
                    <img src="../assets/vue-dc-comics-1/img/buy-dc-power-visa.svg" class="last-comic-img" alt="battery">
                    <p>DC POWER VISA</p>
                </li>
            </ul>
        </div>
    </section>
</template>

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
