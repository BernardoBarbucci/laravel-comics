<header>
    <div class="container">
        <div class="logo">
            <img src="" alt="logo">
        </div>
        <nav class="navbar">
            <ul class="nav-list">
                <li>CHARACTER</li>
                <li>COMICS</li>
                <li>MOVIES</li>
                <li>TV</li>
                <li>GAMES</li>
                <li>COLLECTIBLES</li>
                <li>VIDEOS</li>
                <li>FANS</li>
                <li>NEWS</li>
                <li>SHOP</li>
            </ul>
        </nav>
    </div>
</header>

<style lang="scss" scoped>
.nav-list>li {
    font-size: .8rem;
    font-weight: 500;
    margin: 8px;
    transition: border-bottom 0.3s ease;
    &:hover {
        color: rgb(47 131 241);
        font-weight: bold;
    }
}
.logo{
    height: 70%;
    img{
        height: 100%;
        transition: filter 0.3s ease-in-out;
    }
    img:hover{
        filter: drop-shadow(0 0 1rem  rgb(47 131 241));
    }
}
</style>