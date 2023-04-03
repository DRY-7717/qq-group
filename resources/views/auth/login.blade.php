@extends('auth.layouts.main')


@section('content')
<section class="pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-3">
                <img src="/img/qqgroup.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-8 col-login mx-auto">
                <div class="login-box  p-5 text-white">
                    <h4 class="fw-bold mb-3">Log In</h3>
                        @if (session('message'))
                        {!! session('message') !!}
                        @endif
                        <form action="{{ route('authenticate') }}" method="post" class="form-login">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
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
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <div class="input-group d-flex mb-3">
                                    <input type="password" class="form-control inpass @error('password') is-invalid
                                        
                                    @enderror" name="password" style="border:none;" placeholder="Input your password">
                                    <button type="button" class="btn-look is-invalid rounded-lg" onclick="lookpass()">
                                        <i class="bi bi-eye-slash"></i>
                                    </button>

                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <a href="/forgotpassword" class="mt-2 d-block text-white text-decoration-none">Forgot
                                    password?</a>
                            </div>
                            <button type="submit" class="btn-login" disabled>Login</button>
                            <a href="/" class="text-decoration-none text-white text-center d-block mt-2"><small>Back to home</small></a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const formLogin = document.querySelector('.form-login')
const inpass = document.querySelector('.inpass')
const inmail = document.querySelector('.inmail')
const btnLogin = document.querySelector('.btn-login')
const btnLook = document.querySelector('.btn-look')
const iconPass = document.querySelector('.btn-look i')

btnLogin.style.cursor = 'not-allowed'
formLogin.addEventListener('input', () => {
    if (inpass.value.length > 0 && inmail.value.length > 0) {
        btnLogin.removeAttribute('disabled')
        btnLogin.style.cursor = 'pointer'
    }else{
        btnLogin.setAttribute('disabled','disabled')
        btnLogin.style.cursor = 'not-allowed'
    }
})

const lookpass =  () => {
    if (inpass.type === "password") {
        inpass.type = "text"
        iconPass.classList.replace('bi-eye-slash', 'bi-eye')
    } else {
        inpass.type = "password"
        iconPass.classList.replace('bi-eye', 'bi-eye-slash')
    }
}

</script>
@endsection