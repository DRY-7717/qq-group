@extends('template.main')
@section('content')
<section class="  pb-3 first-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <h3 class="text-white mb-4">{{ $news->title }}</h3>
                @if ($news->image)
                <img src="{{ asset('storage/'. $news->image) }}" alt="" class="news-image-detail">
                @else
                <img src="https://source.unsplash.com/600x500?codm" alt="" class="news-image-detail">
                @endif
            </div>
        </div>

        <div class="row justify-content-between mb-3 mb-lg-5">
            <div class="col-12  col-md-6 col-lg-4  d-flex align-items-center mb-3 mb-lg-0">
                <img src="{{ asset('assets/images/faces/2.jpg') }}" alt="" class="rounded-circle" width="70">
                <div class="name-box mx-3 text-white">
                    <p class="mb-0">{{ $news->user->name }}</p>
                    <small>{{ $news->categorynews->title }} / {{ $news->created_at->format('d M Y') }}</small>
                    <div class="box-icon-detail d-lg-none d-md-none">
                        <img src="/img/whatsapp.png" alt="" class="mx-" width="20">
                        <img src="/img/linkicon.png" alt="" class="mx-1" width="20">
                        <img src="/img/kebabicon.png" alt="" class="mx-1">
                    </div>
                </div>
            </div>
            <div class="col-12  col-md-4 col-lg-4 d-none d-md-flex d-lg-flex justify-content-end align-items-center">
                <div class="box-icon-detail">
                    <img src="/img/whatsapp.png" alt="" class="mx-2">
                    <img src="/img/linkicon.png" alt="" class="mx-2">
                    <img src="/img/kebabicon.png" alt="" class="mx-2">
                </div>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-12 mb-3" style="text-align: justify">
                {!! $news->body !!}
            </div>
            <div class="col-12">
                <button class="btn btn-light px-4 rounded-pill me-2">{{ $news->categorynews->title }}</button>
                <button class="btn btn-light px-4 rounded-pill">Berita</button>
            </div>
        </div>

        <div class="row text-white mt-5">
            <div class="col-12">
                <h4 class="fw-bold">Latest News</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        @if ($allnews[0]->image)
                        <img src="{{ asset('storage/'. $allnews[0]->image) }}" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center;">
                        @else
                        <img src="https://source.unsplash.com/400x300?codm" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center">
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <a href="/news/{{ $allnews[0]->slug }}" class="text-decoration-none d-block text-white">
                            <h5>{{ $allnews[0]->title }}</h5>
                        </a>
                        <small class="text-dark">{{$allnews[0]->categorynews->title }} / {{ $allnews[0]->created_at->format('d M Y') }}</small>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        @if ($allnews[1]->image)
                        <img src="{{ asset('storage/'. $allnews[1]->image) }}" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center">
                        @else
                        <img src="https://source.unsplash.com/400x300?codm" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center">
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <a href="/news/{{ $allnews[1]->slug }}" class="text-decoration-none d-block text-white">
                            <h5>{{ $allnews[1]->title }}</h5>
                        </a>
                        <small class="text-dark">{{$allnews[1]->categorynews->title }} / {{ $allnews[1]->created_at->format('d M Y')
                            }}</small>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        @if ($allnews[2]->image)
                        <img src="{{ asset('storage/'. $allnews[2]->image) }}" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center">
                        @else
                        <img src="https://source.unsplash.com/400x300?codm" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center">
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <a href="/news/{{ $allnews[2]->slug }}" class="text-decoration-none d-block text-white">
                            <h5>{{ $allnews[2]->title }}</h5>
                        </a>
                        <small class="text-dark">{{$allnews[2]->categorynews->title }} / {{ $allnews[2]->created_at->format('d M Y')
                            }}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        @if ($allnews[3]->image)
                        <img src="{{ asset('storage/'. $allnews[3]->image) }}" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center">
                        @else
                        <img src="https://source.unsplash.com/400x300?codm" alt=""
                            style="width: 100%; border-radius: 10px; height: 175px; object-fit: cover; object-position: center">
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <a href="/news/{{ $allnews[3]->slug }}" class="text-decoration-none d-block text-white">
                            <h5>{{ $allnews[3]->title }}</h5>
                        </a>
                        <small class="text-dark">{{$allnews[3]->categorynews->title }} / {{ $allnews[3]->created_at->format('d M Y') }}</small>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection