@extends('auth.layouts.main')


@section('content')

<section class="pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-login mx-auto">

                <div class="login-box  p-5 text-white">
                    <h4 class="fw-bold mb-3">Reset Password</h3>
                        @if (session('message'))
                        {!! session('message') !!}
                        @endif

                        <form action="{{ route('resetpassword') }}" method="post" class="form-login text-center">
                            @csrf
                            <input type="hidden" value="{{ $token }}" name="token">
                            <div class="mb-3 text-start">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control inmail @error('email')
                                            is-invalid
                                        @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="luis@gmail.com" name="email" value="{{ old('email', $email) }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 text-start">
                                <label for="exampleInputPassword1" class="form-label">New Password</label>
                                <div class="input-group d-flex mb-3">
                                    <input type="password"
                                        class="form-control inpass @error('password') is-invalid  @enderror"
                                        name="password" style="border:none;" placeholder="Input your password">
                                    <button type="button" class="btn-look is-invalid rounded-lg" onclick="lookpass()" >
                                        <i class="bi bi-eye-slash"></i>
                                    </button>

                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <div class="input-group d-flex mb-3">
                                    <input type="password"
                                        class="form-control inpass2 @error('cpassword') is-invalid  @enderror"
                                        name="cpassword" style="border:none;" placeholder="Input your cpassword">
                                  

                                    @error('cpassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn-login" disabled>Reset Password</button>
                           
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

const formLogin = document.querySelector('.form-login')
const inpass = document.querySelector('.inpass')
const inpass2 = document.querySelector('.inpass2')
const inmail = document.querySelector('.inmail')
const btnLogin = document.querySelector('.btn-login')
const btnLook = document.querySelector('.btn-look')
const iconPass = document.querySelector('.btn-look i')

btnLogin.style.cursor = 'not-allowed'
formLogin.addEventListener('input', () => {
    if (inpass.value.length > 0 && inmail.value.length > 0 && inpass2.value.length > 0) {
        btnLogin.removeAttribute('disabled')
        btnLogin.style.cursor = 'pointer'
    }else{
        btnLogin.setAttribute('disabled','disabled')
        btnLogin.style.cursor = 'not-allowed'
    }
})

const lookpass =  () => {
    if (inpass.type === "password" || inpass2.type === "password") {
        inpass.type = "text"
        inpass2.type = "text"
        iconPass.classList.replace('bi-eye-slash', 'bi-eye')
    } else {
        inpass.type = "password"
        inpass2.type = "password"
        iconPass.classList.replace('bi-eye', 'bi-eye-slash')
    }
}

</script>



@endsection