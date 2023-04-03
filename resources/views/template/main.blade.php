<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
</head>



<body id="home">
    @include('template.partials.nav')
    @yield('content')

    <footer class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                    <img src="/img/qqgroup2.png" alt="" width="200" class="mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe accusantium rem
                        suscipit,Perspiciatis quaerat voluptatem voluptas consectetur!</p>
                </div>
                <div class="col-12 col-lg-2 mb-3 mb-lg-0">
                    <h5>Sitemap</h5>
                    <ul>
                        <li>
                            <a href="/">Beranda</a>
                        </li>
                        <li>
                            <a href="/about">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="/qqgames">QQ Games</a>
                        </li>
                        <li>
                            <a href="/media">Media</a>
                        </li>
                        <li>
                            <a href="/topup">Topup</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <h5>Kontak</h5>
                    <ul>
                        <li class="mb-3">
                            <i class="bi bi-geo-alt me-1 fw-bold" style="color: #1189a0;"></i>
                            <span> - </span>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-envelope me-1 fw-bold" style="color: #1189a0;"></i>
                            <span> - </span>
                        </li>

                        <li>
                            <a href="#" class="d-inline me-1"><i class="bi bi-twitter" style="color: #1189a0;"></i></a>
                            <a href="#" class="d-inline"><i class="bi bi-instagram " style="color: #1189a0;"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'
    
      const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed: 1500,
        slidesPerView: 3,
        spaceBetween: 10,
        
        // Navigation arrows
        
        navigation: {
        nextEl: '.box-arrow .swiper-next',
        prevEl: '.box-arrow .swiper-prev',
        },
        autoplay: {
        delay: 2000,
        duration:3000,
        },

        breakpoints: {
        // when window width is >= 320px
        320: {
        slidesPerView: 1,
        spaceBetween: 20
        },
        640: {
        slidesPerView: 3,
        spaceBetween: 20
        },
        1024: {
        slidesPerView: 3,
        spaceBetween: 20
        },
        // when window width is >= 480px
        // 480: {
        // slidesPerView: 3,
        // spaceBetween: 30
        // },
        // when window width is >= 640px
        // 640: {
        // slidesPerView: 4,
        // spaceBetween: 40
        // }
        }
        
        });
    </script>
    <script>
        window.onscroll =  () => {
            const nav = document.querySelector('.nav-home')
            const fixnav = nav.offsetTop;
            if (window.pageYOffset > fixnav) {
                nav.classList.add('navbar-fixed')
            } else {
                 nav.classList.remove('navbar-fixed')
            }

        }

    </script>
    @livewireScripts
</body>

</html>