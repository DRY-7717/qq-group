@extends('dashboard.layouts.main')


@section('content')
<div class="page-heading">
    <h3>Change Password</h3>
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
                        <p>Please create strong password!</p>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/changepassword/{{ auth()->user()->id }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Current Password</label>
                                        <input type="password" id="first-name-vertical"
                                            class="form-control mt-2 @error('currentpassword') is-invalid @enderror"
                                            name="currentpassword" placeholder="******">

                                        @error('currentpassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">New Password</label>
                                        <input type="password" id="first-name-vertical"
                                            class="form-control mt-2 @error('password') is-invalid @enderror"
                                            name="password" placeholder="******">

                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Confirm Password</label>
                                        <input type="password" id="first-name-vertical"
                                            class="form-control mt-2 @error('confirm_password') is-invalid @enderror"
                                            name="confirm_password" placeholder="******">

                                        @error('confirm_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection