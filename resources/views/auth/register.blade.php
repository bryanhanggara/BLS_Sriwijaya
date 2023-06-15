<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('register_bls/assets/css/style.css')}}">
    <title>Register</title>
</head>

<body>

    <div class="row">
        <div class="col-4 form mt-5">
            <img class="bls_tittle" src="{{url('register_bls/assets/images/logo.png')}}" alt="">
            <div class="switch mt-3 mb-3">
                <button class="btn-masuk">
                    <a href="#">Daftar</a>
                </button>
                <button class="btn-daftar">
                    <a href="{{route('login')}}">Masuk</a>
                </button>
            </div>
            <div class="social mt-3 mb-3">
                <a href=""><img src="{{url('register_bls/assets/images/fb2.png')}}" alt=""></a>
                <a href=""><img src="{{url('register_bls/assets/images/insta2.png')}}" alt=""></a>
                <a href=""><img src="{{url('register_bls/assets/images/tt2.png')}}" alt=""></a>       
            </div>
            <div class="login">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/user.png')}}" alt="">
                        <input id="name" placeholder="Nama Lengkap" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/user.png')}}" alt="">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       
                    </div>
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/password.png')}}" alt="">
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       
                    </div>
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/password.png')}}" alt="">
                        <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                    </div>
                    <div class="re-got mt-2">
                        <label><input type="checkbox" required> Saya setuju dengan <a href="">Syarat & Ketentuan</a> </label>
                    </div>
                    <button type="submit" class="btn mt-4 mb-5">Masuk</button>

                </form>
            </div>

        </div>
        <div class="col-8 image_u">
            
        </div>
    </div>

    <div class="mobile">
        <img class="bls_tittle" src="assets/images/logo.png" alt="">
        <div class="switch mt-3 mb-3">
            <button class="btn-masuk text-light">
                <a href="#">Daftar</a>
            </button>
            <button class="btn-daftar">
                <a href="{{route('login')}}">Masuk</a>
            </button>
        </div>
        <div class="social mt-3 mb-3">
            <img src="assets/images/fb2.png" alt="">
            <img src="assets/images/insta2.png" alt="">
            <img src="assets/images/tt2.png" alt="">
        </div>
        <div class="login">
             <form method="POST" action="{{ route('register') }}">
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/user.png')}}" alt="">
                        <input id="name" placeholder="Nama Lengkap" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/user.png')}}" alt="">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/password.png')}}" alt="">
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="input">
                        <img class="icon" src="{{url('register_bls/assets/images/password.png')}}" alt="">
                        <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      
                    </div>
                    <div class="re-got mt-2">
                        <label><input type="checkbox" required> Saya setuju dengan <a href="">Syarat & Ketentuan</a> </label>
                    </div>
                    <button type="submit" class="btn mt-4 mb-5">Masuk</button>

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