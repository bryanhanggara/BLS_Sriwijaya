
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('login_bls/assets/css/style.css')}}">
    <title>Login BLS Sriwijaya</title>
</head>

<body>

    <div class="row desktop">
        <div class="col-4 form mt-5">
            <img class="bls_tittle" src="{{url('login_bls/assets/images/logo.png')}}" alt="">
            <div class="switch mt-3 mb-3">
                <button class="btn-masuk">
                    @if (Route::has('register'))
                        <a class="reg" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                    @endif
                </button>
                <button class="btn-daftar">
                    <a href="#">Masuk</a>
                </button>
            </div>
            <div class="social mt-3 mb-3">
                <a href=""><img src="{{url('login_bls/assets/images/fb2.png')}}" alt=""></a>
                <a href=""><img src="{{url('login_bls/assets/images/insta2.png')}}" alt=""></a>
                <a href=""><img src="{{url('login_bls/assets/images/tt2.png')}}" alt=""></a>       
            </div>
            <div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input">
                        <img class="icon" src="{{url('login_bls/assets/images/user.png')}}" alt="">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                       
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input">
                        <img class="icon" src="{{url('login_bls/assets/images/password.png')}}" alt="">
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                   
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="re-got mt-2">
                        <label><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label> <br>
                        @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </div>
                    <button type="submit" class="btn mt-4 mb-3">Masuk</button>
                    {{-- <div class="atau">
                        <p>atau</p>
                        <button class="btn-google">
                            <img src="{{url('login_bls/assets/images/google.png')}}" alt="">
                            Masuk dengan google
                        </button>
                    </div> --}}
                </form>
            </div>

        </div>
        <div class="col-8 image_u">
            
        </div>
    </div>

    <div class="mobile text-center">
        <img class="bls_tittle" src="{{url('login_bls/assets/images/logo.png')}}" alt="">
        <div class="switch mt-3 mb-3 align-center">
            <button class="btn-masuk">
                @if (Route::has('register'))
                        <a class="reg" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                @endif
            </button>
            <button class="btn-daftar">
                <a href="#">Masuk</a>
            </button>
        </div>
        <div class="social mt-3 mb-3 text-center">
            <img src="{{url('login_bls/assets/images/fb2.png')}}" alt="">
            <img src="{{url('login_bls/assets/images/insta2.png')}}" alt="">
            <img src="{{url('login_bls/assets/images/tt2.png')}}" alt="">
        </div>
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input">
                    <img class="icon" src="{{url('login_bls/assets/images/user.png')}}" alt="">
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                 
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input">
                    <img class="icon" src="{{url('login_bls/assets/images/password.png')}}" alt="">
                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                   
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="re-got mt-2">
                    <label><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label> <br>
                    @if (Route::has('password.request'))
                                <a  href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                    @endif
                </div>
                <button type="submit" class="btn mt-4 mb-3">Masuk</button>
                {{-- <div class="atau">
                    <p>atau</p>
                    <button class="btn-google">
                        <img src="{{url('login_bls/assets/images/google.png')}}" alt="">
                        Masuk dengan google
                    </button>
                </div> --}}
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>