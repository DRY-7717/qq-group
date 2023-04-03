@extends('dashboard.layouts.main')


@section('content')
<div class="page-heading">
    <h3>News Category</h3>
</div>
<div class="page-content">


    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                @if (session('message'))
                {!! session('message') !!}
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <p>News Category</p>
                        <a href="/dashboard/categorynews/create" class="btn btn-primary"><i
                                class="bi bi-plus-lg me-2"></i>Add
                            Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <a href="/dashboard/categorynews/{{ $category->slug }}/edit" class="btn btn-sm btn-primary"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="/dashboard/categorynews/{{ $category->slug }}" class="d-inline"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm "
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