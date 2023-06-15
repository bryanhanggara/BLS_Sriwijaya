<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('login_front/style/style.css')}}">
    <link rel="stylesheet" href="{{url('login_front/library/bootstrap-4.6.1-dist/css/bootstrap.min.css')}}">
    <title>Masuk BLS-Sriwijaya</title>
    
</head>
<body>
    <div class="login-card">
        <div class="logo">
            <img src="{{url('login_front/images/logo.png')}}" alt="logo_bls">
        </div>
        
        <h5>{{ __('Verifikasi Email Anda') }}</h5>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('Email verifikasi berhasil di refresh, silahkan cek kembali.') }}
            </div>
        @endif
        {{ __('Sebelum melanjutkan, periksa email Anda untuk tautan verifikasi.') }}
        {{ __(' Jika Anda tidak menerima email tersebut,') }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik disini untuk meminta ulang') }}</button>.
        </form>


      </div>
      <script src="library/jquery-3.6.0.min.js"></script>
      <script src="https://kit.fontawesome.com/dd8c49730d.js"></script>
      <script src="library/bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
</body>
</html>