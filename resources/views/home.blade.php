@extends('template.main')
@section('content')
<section class="  pb-3 first-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 d-lg-flex d-none ">
                <button class="btn  align-self-center border-0" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <i class="bi bi-arrow-left" style="font-size: 45px; color:white;"></i>
                </button>
            </div>
            <div class="col-lg-10 mx-auto">
                <div class="container-carousel">
                    <div id="carouselExampleInterval" class="carousel slide position-relative" style="height: 100%;"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 100%;" data-bs-interval="2000">

                                @if ($news[0]->image)
                                <img src="{{ asset('storage/'.$news[0]->image) }}"
                                    class="d-block w-100 bg-info img-carousel" alt="...">
                                @else
                                <img src="https://source.unsplash.com/900x600?codm"
                                    class="d-block w-100 bg-info img-carousel" alt="...">
                                @endif

                                <div class="caption-carousel  d-md-block">
                                    <a href="/news/{{ $news[0]->slug }}"
                                        class="text-decoration-none d-block text-white">{{ $news[0]->title }}</a>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 100%;" data-bs-interval="2000">

                                @if ($news[1]->image)
                                <img src="{{ asset('storage/'.$news[1]->image) }}"
                                    class="d-block w-100 bg-info img-carousel" alt="...">
                                @else
                                <img src="https://source.unsplash.com/900x600?codm"
                                    class="d-block w-100 bg-info img-carousel" alt="...">
                                @endif

                                <div class="caption-carousel  d-md-block">
                                    <a href="/news/{{ $news[1]->slug }}"
                                        class="text-decoration-none d-block text-white">{{ $news[1]->title }}</a>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 100%;" data-bs-interval="2000">

                                @if ($news[2]->image)
                                <img src="{{ asset('storage/'.$news[2]->image) }}"
                                    class="d-block w-100 bg-info img-carousel" alt="...">
                                @else
                                <img src="https://source.unsplash.com/900x600?codm"
                                    class="d-block w-100 bg-info img-carousel" alt="...">
                                @endif

                                <div class="caption-carousel  d-md-block">
                                    <a href="/news/{{ $news[2]->slug }}"
                                        class="text-decoration-none d-block text-white">{{ $news[2]->title }}</a>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev d-block d-lg-none" type="button"
                            data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next d-block d-lg-none" type="button"
                            data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col-lg-1 d-lg-flex d-none">
                <button class="btn  align-self-center border-0" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <i class="bi bi-arrow-right" style="font-size: 45px; color:white;"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="pt-3 pb-5 sec-before">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-12 mb-3">
                <a href="/topup" class="btn text-white py-2" style="background-color: #154EB2;">Ayo Top Up Game Online
                    Anda!
                    <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
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
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>



                    </div>
                </div>

            </div>
            <div class="col-lg-10 d-lg-none d-block mt-3">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/topup/store"> <img src="/img/card-game.png" alt=""></a>
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

<section class="pt-3 pb-5" style="background: linear-gradient(180deg, #1189A0 47.36%, #FFFFFF 88.43%);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-white">Berita</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="card-news overflow-hidden">
                    <div class="news-image overflow-hidden mb-3">
                        @if ($news[3]->image)
                        <img src="{{ asset('storage/'. $news[3]->image) }}" alt="">
                        @else
                        <img src="https://source.unsplash.com/400x400?codm" alt="">
                        @endif
                    </div>
                    <div class="news-title">
                        <p class="mb-1">{{ $news[3]->categorynews->title }}</p>
                        <a href="/news/{{ $news[3]->slug }}" class="text-decoration-none d-block text-dark">
                            <h5 class="fw-bold">{{ $news[3]->title }}</h5>
                        </a>
                        <small>{{ $news[3]->created_at->format('d M Y') }}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row justify-content-evenly">
                    <div class="col-lg-5 mb-3">
                        <div class="card-news-child overflow-hidden w-100">
                            <div class="news-image overflow-hidden mb-3">
                                @if ($news[4]->image)
                                <img src="{{ asset('storage/'. $news[4]->image) }}" alt="">
                                @else
                                <img src="https://source.unsplash.com/400x400?codm" alt="">
                                @endif
                            </div>
                            <div class="news-title">
                                <p class="mb-1">{{ $news[4]->categorynews->title }}</p>
                                <a href="/news/{{ $news[4]->slug }}" class="text-decoration-none d-block text-dark">
                                    <h5 class="fw-bold">{{ $news[4]->title }}</h5>
                                </a>
                                <small>{{ $news[4]->created_at->format('d M Y') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="card-news-child overflow-hidden w-100">
                            <div class="news-image overflow-hidden mb-3">
                                @if ($news[5]->image)
                                <img src="{{ asset('storage/'. $news[5]->image) }}" alt="">
                                @else
                                <img src="https://source.unsplash.com/400x400?codm" alt="">
                                @endif
                            </div>
                            <div class="news-title">
                                <p class="mb-1">{{ $news[5]->categorynews->title }}</p>
                                <a href="/news/{{ $news[5]->slug }}" class="text-decoration-none d-block text-dark">
                                    <h5 class="fw-bold">{{ $news[5]->title }}</h5>
                                </a>
                                <small>{{ $news[5]->created_at->format('d M Y') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="card-news-child overflow-hidden w-100">
                            <div class="news-image overflow-hidden mb-3">
                                @if ($news[6]->image)
                                <img src="{{ asset('storage/'. $news[6]->image) }}" alt="">
                                @else
                                <img src="https://source.unsplash.com/400x400?codm" alt="">
                                @endif
                            </div>
                            <div class="news-title">
                                <p class="mb-1">{{ $news[6]->categorynews->title }}</p>
                                <a href="/news/{{ $news[6]->slug }}" class="text-decoration-none d-block text-dark">
                                    <h5 class="fw-bold">{{ $news[6]->title }}</h5>
                                </a>
                                <small>{{ $news[6]->created_at->format('d M Y') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="card-news-child overflow-hidden w-100">
                            <div class="news-image overflow-hidden mb-3">
                                @if ($news[7]->image)
                                <img src="{{ asset('storage/'. $news[7]->image) }}" alt="">
                                @else
                                <img src="https://source.unsplash.com/400x400?codm" alt="">
                                @endif
                            </div>
                            <div class="news-title">
                                <p class="mb-1">{{ $news[7]->categorynews->title }}</p>
                                <a href="/news/{{ $news[7]->slug }}" class="text-decoration-none d-block text-dark">
                                    <h5 class="fw-bold">{{ $news[7]->title }}</h5>
                                </a>
                                <small>{{ $news[7]->created_at->format('d M Y') }}</small>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <a href="/news" class="d-block text-white text-decoration-none text-center btn btn-primary"
                    style="background-color: #1189A0">Lihat Selengkapnya <i class="bi bi-chevron-down"></i></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-dark">Komunitas</h3>
            </div>
        </div>

        <div class="row mt-3 row-community">
            <div class="col-lg-3 mb-3">
                <div class="card-community pb-3">
                    <div class="community-image mb-2">
                        <img src="/img/ml.png" alt="" class="w-100">
                    </div>
                    <div class="community-body px-3">
                        <h5 class="fw-bold mb-1">Mobile Legend Official Community</h5>
                        <small class="d-block">Total 1k Anggota</small>
                        <div class="box-btn-community d-flex justify-content-center mt-3">
                            <button class="btn btn-warning rounded-pill btn-sm ">5 Channel</button>
                            <button class="btn btn-dark  rounded-pill  mx-2 px-4 text-white"
                                style="background-color: #1F1F47">Join <i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="card-community pb-3">
                    <div class="community-image mb-2">
                        <img src="/img/ml.png" alt="" class="w-100">
                    </div>
                    <div class="community-body px-3">
                        <h5 class="fw-bold mb-1">Mobile Legend Official Community</h5>
                        <small class="d-block">Total 1k Anggota</small>
                        <div class="box-btn-community d-flex justify-content-center mt-3">
                            <button class="btn btn-warning rounded-pill btn-sm ">5 Channel</button>
                            <button class="btn btn-dark  rounded-pill  mx-2 px-4 text-white"
                                style="background-color: #1F1F47">Join <i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="card-community pb-3">
                    <div class="community-image mb-2">
                        <img src="/img/ml.png" alt="" class="w-100">
                    </div>
                    <div class="community-body px-3">
                        <h5 class="fw-bold mb-1">Mobile Legend Official Community</h5>
                        <small class="d-block">Total 1k Anggota</small>
                        <div class="box-btn-community d-flex justify-content-center mt-3">
                            <button class="btn btn-warning rounded-pill btn-sm ">5 Channel</button>
                            <button class="btn btn-dark  rounded-pill  mx-2 px-4 text-white"
                                style="background-color: #1F1F47">Join <i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="card-community pb-3">
                    <div class="community-image mb-2">
                        <img src="/img/ml.png" alt="" class="w-100">
                    </div>
                    <div class="community-body px-3">
                        <h5 class="fw-bold mb-1">Mobile Legend Official Community</h5>
                        <small class="d-block">Total 1k Anggota</small>
                        <div class="box-btn-community d-flex justify-content-center mt-3">
                            <button class="btn btn-warning rounded-pill btn-sm ">5 Channel</button>
                            <button class="btn btn-dark  rounded-pill  mx-2 px-4 text-white"
                                style="background-color: #1F1F47">Join <i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>


@endsection