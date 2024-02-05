<footer>
    <section id="footer-info" style="background-image: url('{{ asset('img/laravel-comics/laravel-comics/images/footer-bg.jpg') }}');">
        <div class="container footer-lists">
            <div class="info-list">
                <h1>DC COMICS</h1>
                <ul>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <h1>SHOP</h1>
                <ul>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <div class="info-list">
                <h1>DC</h1>
                <ul>
                    <li>Terms Of Use</li>
                    <li>Privacy Policy (New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscription</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="info-list">
                <h1>SITES</h1>
                <ul>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="social-media">
        <div class="container">
            <div class="wrapper">
                <div class="left-info">
                    <h1>SIGN-UP NOW!</h1>
                </div>
                <div class="right-info">
                    <p>FOLLOW US</p>
                    <ul class="socials">
                        <li>
                            <img src="{{ asset('img/laravel-comics/laravel-comics/images/footer-facebook.png') }}" alt="FB">
                        </li>
                        <li>
                            <img src="{{ asset('img/laravel-comics/laravel-comics/images/footer-twitter.png') }}" alt="TW">
                        </li>
                        <li>
                            <img src="{{ asset('img/laravel-comics/laravel-comics/images/footer-youtube.png') }}" alt="YT">
                        </li>
                        <li>
                            <img src="{{ asset('img/laravel-comics/laravel-comics/images/footer-pinterest.png') }}" alt="PI">
                        </li>
                        <li>
                            <img src="{{ asset('img/laravel-comics/laravel-comics/images/footer-periscope.png') }}" alt="MAPS">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
    
<style lang="scss" scoped>
#footer-info {
    height: 22rem;

    .info-list {
        margin-top: 1.5rem;

    }
    
    .info-list:nth-child(2) {
        margin-left: 2rem;
    }
    
    .info-list:nth-child(3) {
        margin-left: 2rem;
    }
    
    h1 {
        padding-left: 2rem;
        font-size: 1.1rem;
        font-weight: bold;
        margin-top: 1rem;
        margin-bottom: .6rem;
    }
    
    h1:hover {
        color: #2f83f1;
    }
    
    li {
        font-size: .8rem;
        margin-bottom: .3rem;
        list-style: none;
        color: #828982;
        transition: transform 0.3s ease-in-out;
    }
    
    li:hover {
        transform: scale(1.2);
        transform-origin: right right;
        color: white;
    }
}
    
.socials {
    list-style: none;
    
    li {
        margin-top: 4px;
        img {
            height: 1.5rem;
            transition: transform 0.3s ease-in-out;
        }
    
        &:hover {
            transform: scale(1.2);
            transform-origin: right right;
        }
    }
}
</style>