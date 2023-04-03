@extends('template.main')
@section('content')
<section class="  section-topup">
    <img src="/img/pattern.png" alt="" class="w-100">
    <h3 class="fw-bold text-white position-absolute title-topup">Topup</h3>
</section>
<section class="pt-3 pb-5 sec-before">
    <div class="container">
        <div class="row align-items-center ">

            <div class="col-lg-12 mb-3">
                <div class="row text-white align-items-center">

                    <div
                        class="col-12 col-lg-6 mb-2 mb-lg-0 d-flex align-items-center justify-content-lg-start justify-content-center">
                        <p class="mb-0 me-2 fs-lg-4 fs-4 fw-semibold">Diskon Kilat</p>
                        <p class="mb-0">berakhir dalam </p>
                        <div class="box-time d-lg-flex d-none ms-3 align-items-center">
                            <div class="time p-2 me-2">00</div>
                            <span class="me-2">:</span>
                            <div class="time p-2 me-2">00</div>
                            <span class="me-2">:</span>
                            <div class="time p-2">00</div>
                        </div>
                    </div>
                    <div class="col-12 d-lg-none d-block mt-3">
                        <div class="row align-items-center justify-content-around">
                            <div class="col-3">
                                <div class="time p-2 me-1 text-center">00</div>
                            </div>
                            <div class="col">
                                <div class="  me-1 text-center">:</div>
                            </div>
                            <div class="col-3">
                                <div class="time p-2 me-1 text-center">00</div>
                            </div>
                            <div class="col">
                                <div class="  me-1 text-center">:</div>
                            </div>
                            <div class="col-3">
                                <div class="time p-2 me-1 text-center">00</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row position-relative">
            <div class="col-lg-2 d-lg-block d-none">
                <div class="container-box-discount w-100 d-flex justify-content-center align-items-center "
                    style="background-color: #fff">
                    <div class="box-discount">
                        <h3 class="mb-1">Diskon</h3>
                        <h3>Kilat</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-10  position-absolute swipper-container d-lg-block d-none">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-10 d-lg-none d-block mt-3">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"><img src="/img/card-game.png" alt=""></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row justify-content-end d-none d-lg-flex" style="margin-top: -20px;">
            <div class="col-lg-4 d-flex justify-content-end px-5">
                <div class="box-arrow">
                    <span class="mx-2 swiper-prev"><i class="bi bi-arrow-left"
                            style="font-size: 35px; color:#878787;"></i></span>
                    <span class="swiper-next"><i class="bi bi-arrow-right"
                            style="font-size: 35px; color:white;"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-3">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <h4 class="text-white fw-semibold">Semua Produk</h4>
            </div>
        </div>
        <div class="row justify-content-evenly">
            <div class="p-0 col-lg-2">
              <a href="/topup/store"><img src="/img/pubg.png" alt="" style="width: 100%; object-fit: cover; object-position: center"></a>
            </div>
            <div class="p-0 col-lg-2">
              <a href="/topup/store"><img src="/img/pubg.png" alt="" style="width: 100%; object-fit: cover; object-position: center"></a>
            </div>
            <div class="p-0 col-lg-2">
              <a href="/topup/store"><img src="/img/pubg.png" alt="" style="width: 100%; object-fit: cover; object-position: center"></a>
            </div>
            <div class="p-0 col-lg-2">
              <a href="/topup/store"><img src="/img/pubg.png" alt="" style="width: 100%; object-fit: cover; object-position: center"></a>
            </div>
            <div class="p-0 col-lg-2">
              <a href="/topup/store"><img src="/img/pubg.png" alt="" style="width: 100%; object-fit: cover; object-position: center"></a>
            </div>
            <div class="p-0 col-lg-2">
              <a href="/topup/store"><img src="/img/pubg.png" alt="" style="width: 100%; object-fit: cover; object-position: center"></a>
            </div>
           
        </div>
    </div>
</section>





@endsection