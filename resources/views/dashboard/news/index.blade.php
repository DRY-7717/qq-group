@extends('dashboard.layouts.main')


@section('content')
<div class="page-heading">
    <h3>News</h3>
</div>
<div class="page-content">


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @if (session('message'))
                {!! session('message') !!}
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <p>All News</p>
                        <a href="/dashboard/news/create" class="btn btn-primary"><i class="bi bi-plus-lg me-2"></i>Add
                            News</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Excerpt</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $n)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $n->title }}</td>
                                    <td>{{ $n->slug }}</td>
                                    <td>{{ $n->excerpt }}</td>
                                    <td>
                                        <a href="/dashboard/news/{{ $n->slug }}" class="btn btn-sm btn-info mb-1"><i class="bi bi-eye"></i></a>
                                        <a href="/dashboard/news/{{ $n->slug }}/edit" class="btn btn-sm btn-primary mb-1"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="/dashboard/news/{{ $n->slug }}" class="d-inline" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mb-1"
                                                onclick="return confirm('are you sure?')"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection