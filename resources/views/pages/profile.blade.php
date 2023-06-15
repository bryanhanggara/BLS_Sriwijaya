<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Edit Profil - BLS Sriwijaya</title>
  <link rel="shortcut icon" type="png" href="images/bls.png">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/luxonauta/luxa@8a98/dist/compressed/luxa.css'><link rel="stylesheet" href="{{url('BLS-Sriwijaya/style/style_profil.css')}}">
  <script type="text/javascript" src="{{url('BLS-Sriwijaya/js/login.js')}}"></script>
  <link rel="stylesheet" href="{{url('login_front/library/bootstrap-4.6.1-dist/css/bootstrap.min.css')}}">
</head>
<body>
<!-- partial:index.partial.html -->
<main class="has-dflex-center">
  <section>
    <div class="lx-container-50">
      <div class="lx-row">
        <h1 class="title">Info Profil</h1>
      </div>
      <div class="lx-row align-stretch">
        <div class="lx-column column-user-pic">
            <div class="profile-pic bs-md">
              <h1 class="pic-label">Foto Profil</h1>
              <div class="pic bs-md">
                @php($profile_image = auth()->user()->profile_image)
                <img class="rounded-circle" width="4024" height="6048" src="@if($profile_image == null) {{ asset("storage/profile_images/profil-80.jpg") }}  @else {{ asset("storage/$profile_image") }} @endif" id="image_preview_container">
                <a id="change-avatar" class="lx-btn"><i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Ubah foto profil</a>
              </div>
            </div>
          </div>
        <div class="lx-column">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <form action="{{ route('update.profile')}}" id="profile_setup_frm" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                    
                <div class="fieldset">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                      <span class="icon"><i class="fas fa-user"></i></span>
                      <input value="{{old('username', Auth::user()->username)}}" type="text" name="username" id="username" class="form-control">
                    </div>
                @error('username')
                    <div class="text text-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="fieldset">
                    <label for="name">Nama</label>
                    <div class="input-wrapper">
                      <span class="icon"><i class="fas fa-user"></i></span>
                      <input value="{{old('name', Auth::user()->name)}}" type="text" name="name" id="name" class="form-control">
                    </div>
                    @error('name')
                    <div class="text text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="fieldset">
                    <label for="status">Status</label>
                    <select id="" class="form-control" name="status">
                      <option selected>
                        {{old('status', Auth::user()->status)}}
                      </option>
                      <option>Mahasiswa D3</option>
                      <option>Mahasiswa S1</option>
                      <option>Mahasiswa S2</option>
                    </select>
                    @error('jurusan')
                    <div class="text text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="fieldset">
                  <label for="jurusan">Universitas</label>
                  <div class="input-wrapper">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <input value="{{old('univ', Auth::user()->univ)}}" type="text" name="univ" id="univ" class="form-control">
                  </div>
                  @error('univ')
                  <div class="text text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>

                <div class="fieldset">
                    <label for="jurusan">jurusan</label>
                    <div class="input-wrapper">
                      <span class="icon"><i class="fas fa-user"></i></span>
                      <input value="{{old('jurusan', Auth::user()->jurusan)}}" type="text" name="jurusan" id="jurusan" class="form-control">
                    </div>
                    @error('jurusan')
                    <div class="text text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="fieldset">
                  <label for="no_hp">Nomor Handphone/Whatapps</label>
                  <div class="input-wrapper">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <input value="{{old('no_hp', Auth::user()->no_hp)}}" type="text" name="no_hp" id="no_hp" class="form-control">
                  </div>
                  @error('no_hp')
                  <div class="text text-danger">
                      {{$message}}
                  </div>
                  @enderror
              </div>
                
                <div class="fieldset">
                    <label for="image">
                        Foto Profil
                    </label>
                    <div class="input-wrapper">
                      <span class="icon"><i class="fas fa-image"></i></span>
                      <input type="file" name="profile_image" id="profile_image"  class="form-control">
                </span>
                    </div>
                </div>
                
                <div class="fieldset">
                    <label for="email">E-mail</label>
                    <div class="input-wrapper">
                      <span class="icon"><i class="fas fa-envelope"></i></span>
                      <input value="{{old('email', Auth::user()->email)}}" type="email" name="email" id="email">
                    </div>
                    <div id="email-helper" class="helper"></div>
                    @error('email')
                    <div class="text text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <a href="{{route('dashboard.index')}}" style="text-decoration: none;" class="lx-btn btn-danger"><i class="fas fa-ban"></i>&nbsp;&nbsp;Batal</a>
                <button class="lx-btn" type="submit" style="background-color:  #33a100; color: #f9f9f9"><i class="fas fa-save"></i>&nbsp;&nbsp;Simpan</button>
            </form>
            
        </div>
      </div>
    </div>
  </section>
  @include('sweetalert::alert')
</main>

<script src="{{ asset('js/profileupdate.js') }}"></script>
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" defer crossorigin="anonymous" data-search-pseudo-elements></script>
<!-- partial -->
  
</body>
</html>
