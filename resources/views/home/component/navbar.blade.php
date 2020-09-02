<nav class="header__menu">
    <ul>
        <li class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a href="/">Home</a></li>
        <li class="{{ Route::currentRouteNamed('allproduct') ? 'active' : '' }}"><a href="/product">Semua Product</a>
        </li>
        <li class="{{ Route::currentRouteNamed('collection') ? 'active' : '' }}"><a href="#">Koleksi</a>
            <ul class="dropdown">
                <li><a href="/product/collection/namakoleksi">Gamis</a></li>
                <li><a href="/product/collection/namakoleksi">Jeans</a></li>
                <li><a href="/product/collection/namakoleksi">Jaket</a></li>
                <li><a href="/product/collection/namakoleksi">Murah</a></li>
            </ul>
        </li>
        {{-- <li class=""><a href="">Blog</a></li>
        <li class=""><a href="">Contact</a></li> --}}
    </ul>
</nav>