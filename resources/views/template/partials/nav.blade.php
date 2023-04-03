<nav class="navbar navbar-expand-lg navbar-dark nav-home py-3">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/qqgroup.png" alt="" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item">
                    <a class="nav-link  text-white {{ Request::is('/') ? 'active' : false }}" aria-current="page"
                        href="/#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('about') ? 'active' : false }}" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item ">
                    <a  class="nav-link text-white {{ Request::is('news*') ? 'active' : false }}" href="/news">QQ Games</a>
                </li>
                <li class="nav-item">
                    <a href="/media" class="nav-link text-white {{ Request::is('media*') ? 'active' : false }}">Media</a>
                </li>
            </ul>
            <ul class="navbar-nav d-block d-lg-flex align-items-center">
                @auth
                <li class="nav-item mx-0 mx-lg-2">
                    <a class="nav-link text-white" aria-current="page" href="/dashboard">Dashboard</a>
                </li>

                @else
                <li class="nav-item mx-0 mx-lg-2">
                    <a class="nav-link text-white" aria-current="page" href="/login">Login</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link px-3 py-2  text-center btn-topup  " href="/topup">Top Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>