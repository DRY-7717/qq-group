@extends('dashboard.layouts.main')


@section('content')
<div class="page-heading">
    <h3>{{ $news->title }}</h3>
    <p>{{ $news->categorynews->title }}</p>
</div>
<div class="page-content">
    <section class="section">

        <div class="row">
            <div class="col-lg-12">

                @if ($news->image)
                <img src="{{ asset('storage/'.$news->image) }}" alt="" class="w-100"
                    style="height: 500px; object-fit: cover; object-position:top;border-radius: 20px; ">
                @else
                <img src="https://source.unsplash.com/600x400?people" alt="" class="w-100"
                    style="height: 500px; object-fit: cover; object-position:top;border-radius: 20px; ">
                @endif


                <div class="mt-3 mb-4" style="text-align: justify;">
                    {!! $news->body !!}
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <a href="/dashboard/news/{{ $news->id }}" class="btn btn-sm btn-info"><i
                                class="bi bi-eye"></i></a>
                        <a href="/dashboard/news/{{ $news->slug }}/edit" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="/dashboard/news/{{ $news->slug }}" class="d-inline" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('are you sure?')"><i
                                    class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection