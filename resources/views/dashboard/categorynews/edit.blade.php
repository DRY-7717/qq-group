@extends('dashboard.layouts.main')


@section('content')
<div class="page-heading">
    <h3>Edit Category</h3>
</div>
<div class="page-content">
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit News Category</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="/dashboard/categorynews/{{ $category->slug }}" class="form form-vertical" method="post">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Title</label>
                                                <input type="text" id="first-name-vertical" class="form-control mt-2 @error('title')
                                                    is-invalid
                                                @enderror" name="title" placeholder="Input title category" value="{{ $category->title }}">

                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Create</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection