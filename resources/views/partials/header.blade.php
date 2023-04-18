<header> 
<div class="container">
    <a href="{{ route('home') }}">
        <img src="/img/dc-logo.png" width="85px" alt="">
    </a>
    <nav class="main-menu">
    <ul style="list-style:none;">
        <li class="menu-item">characters</li>
        <li class="menu-item active">
            <a href="{{ route('comics.index') }}">comics</a>
        </li>
        <li class="menu-item">movies</li>
        <li class="menu-item">tv</li>
        <li class="menu-item">games</li>
        <li class="menu-item">collectibles</li>
        <li class="menu-item">videos</li>
        <li class="menu-item">fans</li>
        <li class="menu-item">news</li>
        <li class="menu-item">shop</li>
    </ul>
    </nav>
</div>
</header>
<style lang="scss" scoped>
header{
    background-color: lightblue;
}

ul {
    display: flex;
    .menu-item {
        padding: 0 15px;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 900;
        &.active,
        &:hover {
            color: rgb(2, 130, 249);
        }
    }
}
</style>