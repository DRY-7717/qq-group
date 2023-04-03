<div>
    <section class="  section-topup">
        <img src="/img/pattern.png" alt="" class="w-100">
        <h3 class="fw-bold text-white position-absolute title-about">QQ Games</h3>
    </section>
    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h3 class="text-white fw-semibold">Latest News</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="card-news overflow-hidden">
                        <div class="news-image overflow-hidden mb-3">
                            @if ($news[0]->image)
                            <img src="{{ asset('storage/'. $news[0]->image) }}" alt="">
                            @else
                            <img src="https://source.unsplash.com/400x400?codm" alt="">
                            @endif
                        </div>
                        <div class="news-title">
                            <a href="/news/{{ $news[0]->slug }}"
                                class="text-decoration-none d-block text-dark d-block mb-0">
                                <h5 class="fw-bold text-white">{{ $news[0]->title }}</h5>
                            </a>
                            <small>{{ $news[0]->categorynews->title }}/{{ $news[0]->created_at->format('d M Y')
                                }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-evenly">
                        <div class="col-lg-5 mb-3">
                            <div class="card-news-child overflow-hidden w-100">
                                <div class="news-image overflow-hidden mb-3">
                                    @if ($news[2]->image)
                                    <img src="{{ asset('storage/'. $news[2]->image) }}" alt="">
                                    @else
                                    <img src="https://source.unsplash.com/400x400?codm" alt="">
                                    @endif
                                </div>
                                <div class="news-title">
                                    <a href="/news/{{ $news[2]->slug }}"
                                        class="text-decoration-none d-block text-dark d-block mb-0">
                                        <h5 class="fw-bold text-white">{{ $news[2]->title }}</h5>
                                    </a>

                                    <small>{{ $news[2]->categorynews->title }}/{{ $news[2]->created_at->format('d M Y')
                                        }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <div class="card-news-child overflow-hidden w-100">
                                <div class="news-image overflow-hidden mb-3">
                                    @if ($news[2]->image)
                                    <img src="{{ asset('storage/'. $news[2]->image) }}" alt="">
                                    @else
                                    <img src="https://source.unsplash.com/400x400?codm" alt="">
                                    @endif
                                </div>
                                <div class="news-title">
                                    <a href="/news/{{ $news[2]->slug }}"
                                        class="text-decoration-none d-block text-dark d-block mb-0">
                                        <h5 class="fw-bold text-white">{{ $news[2]->title }}</h5>
                                    </a>

                                    <small>{{ $news[2]->categorynews->title }}/{{ $news[2]->created_at->format('d M Y')
                                        }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <div class="card-news-child overflow-hidden w-100">
                                <div class="news-image overflow-hidden mb-3">
                                    @if ($news[3]->image)
                                    <img src="{{ asset('storage/'. $news[3]->image) }}" alt="">
                                    @else
                                    <img src="https://source.unsplash.com/400x400?codm" alt="">
                                    @endif
                                </div>
                                <div class="news-title">
                                    <a href="/news/{{ $news[3]->slug }}"
                                        class="text-decoration-none d-block text-dark d-block mb-0">
                                        <h5 class="fw-bold text-white ">{{ $news[3]->title }}</h5>
                                    </a>
                                    <small>{{ $news[3]->categorynews->title }}/{{ $news[3]->created_at->format('d M Y')
                                        }}</small>
                                </div>
                            </div>
                        </div>
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
                                    <a href="/news/{{ $news[4]->slug }}"
                                        class="text-decoration-none d-block text-dark d-block mb-0">
                                        <h5 class="fw-bold text-white">{{ $news[4]->title }}</h5>
                                    </a>
                                    <small>{{ $news[4]->categorynews->title }}/{{ $news[4]->created_at->format('d M Y')
                                        }}</small>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h3 class="text-white fw-semibold">Ada berita apa di QQ games ?</h3>
                    <form action="">
                        <div class="input-group mb-3">
                            <input wire:model="search" type="text" class="form-control border border-end-0"
                                placeholder="Search news" name="search">
                            <span class="input-group-text bg-white border border-start-0" id="basic-addon2"><i
                                    class="bi bi-search text-secondary" style="font-size: 15px;"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @if ($allnews->count())
    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row">
                @foreach ($allnews as $n)
                <div class="col-lg-4 mb-3">
                    <div class="card-news-child overflow-hidden w-100">
                        <div class="news-games overflow-hidden mb-3">
                            @if ($n->image)
                            <img src="{{ asset('storage/'. $n->image) }}" alt="">
                            @else
                            <img src="https://source.unsplash.com/400x400?codm" alt="">
                            @endif
                        </div>
                        <div class="news-title">
                            <a href="/news/{{ $n->slug }}" class="text-decoration-none d-block text-dark d-block mb-0">
                                <h5 class="fw-bold text-white">{{ $n->title }}</h5>
                            </a>
                            <small>{{ $n->categorynews->title }}/{{ $n->created_at->format('d M Y')
                                }}</small>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @else
    <div class="container mb-3">
        <div class="row">
            <div class="col-12">
                <h3 class="text-white fw-semibold">Data tidak ditemukan!</h3>
            </div>
        </div>
    </div>
    @endif

    <section class="pt-3 pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="fw-semibold text-white ">Komunitas</h3>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <h4 class="fw-semibold text-white ">Trending</h4>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-3">
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
                <div class="col-lg-3">
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
                <div class="col-lg-3">
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
                <div class="col-lg-3">
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
            <div class="row mb-3">
                <div class="col-12">
                    <h4 class="fw-semibold text-white ">Semua Produk</h4>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-3">
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
                <div class="col-lg-3">
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
                <div class="col-lg-3">
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
                <div class="col-lg-3">
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
            <div class="row mt-2">
                <div class="col-12">
                    <a href="#" class="d-block  text-decoration-none text-center btn btn-light bg-white" style="color: #1189A0">Lihat Selengkapnya <i class="bi bi-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </section>

</div>