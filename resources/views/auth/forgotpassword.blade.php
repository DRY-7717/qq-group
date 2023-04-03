@extends('auth.layouts.main')


@section('content')
<section class="pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-login mx-auto">

                <div class="login-box  p-5 text-white">
                    <h4 class="fw-bold mb-3">Forgot Password</h3>
                        @if (session('message'))
                        {!! session('message') !!}
                        @endif
                        

                        <form action="{{ route('passwordlink') }}" method="post" class="form-login text-center">
                            @csrf
                            <div class="mb-3 text-start">
                                <label for="exampleInputEmail1" class="form-label">Enter your user account's verified
                                    email address and we will send you a password reset link.</label>
                                <input type="email" class="form-control inmail @error('email')
                                            is-invalid
                                        @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="luis@gmail.com" name="email" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <button type="submit" class="btn-login">Send password reset email</button>
                            <a href="/login" class="text-white text-decoration-none mt-1 d-block"><small>Have an
                                    account?</small></a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection