@extends('dashboard.layouts.main')


@section('content')
<div class="page-heading">
    <h3>Edit News</h3>

</div>
<div class="page-content">
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit News</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="/dashboard/news/{{ $news->slug }}" class="form form-vertical" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Title</label>
                                                <input type="text" id="first-name-vertical" class="form-control mt-2 @error('title')
                                                    is-invalid
                                                @enderror" name="title" placeholder="Input title category"
                                                    value="{{ old('title', $news->title) }}">

                                                @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <label for="first-name-vertical">Category</label>
                                            <div class="form-group mt-2">
                                                <select class="choices form-select @error('categorynews_id')
                                                        is-invalid
                                                    @enderror" name="categorynews_id">

                                                    <option value="" selected disabled>Choose Category</option>
                                                    @foreach ($categories as $category)
                                                    @if ($category->id == $news->categorynews_id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->title }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $category->id }}">{{ $category->title }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                @error('categorynews_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Thumbnail</label>
                                                <div class="col-lg-6">
                                                    @if ($news->image)
                                                    <img src="{{ asset('storage/'. $news->image) }}" alt=""
                                                        class="img-preview img-fluid mb-2">
                                                    @else
                                                    <img class="img-preview  img-fluid mb-2 d-none">
                                                    @endif
                                                </div>

                                                <input type="file" class="form-control mt-2" id="customFile"
                                                    name="image" onchange="previewImage()">

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Content</label>
                                                <textarea type="text" id="summernote" class="form-control mt-2 @error('body')
                                                is-invalid
                                                @enderror" name="body">{{ old('body',$news->body) }}</textarea>

                                                @error('body')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <a href="/dashboard/news"  class="btn btn-secondary me-1 mb-1">Cancel</a>
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
<script>
    function previewImage() {
    const imagePreview = document.querySelector('.img-preview');
    const image = document.querySelector('#customFile');
    const ofReader = new FileReader();
    

    imagePreview.classList.replace('d-none', 'd-block')
    
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (ofREvent) {
    imagePreview.src = ofREvent.target.result;
    }


    }
</script>
@endsection