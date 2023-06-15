@extends('include.navbar')

@section('li')
<ul class="navbar-nav mx-auto">
    <li class="nav-item ">
      <a class="nav-link active" href="{{route('dashboard.index')}}">Kursus</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('about')}}">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Topik</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Tentang</a>
    </li>
</ul>
@endsection

@extends('layout.app')
@section('title')
    Dashboard BLS Sriwijaya
@endsection
@section('content')
<div class="header">
        
</div>

<div class="container mt--7 card-dash">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="avatar">
                  @php($profile_image = auth()->user()->profile_image)
                  <img class="rounded-circle" style="width: 185px; height: 185px; object-fit: cover;" src="@if($profile_image == null) {{ asset('storage/profile_images/profil-80.jpg') }}  @else {{ asset('storage/'.$profile_image) }} @endif" id="image_preview_container">
                  
                </div>
                
            </div>
          </div>

          <div class="card-body">
            <div class="text-center" >
              <h3>{{Auth::user()->name}}</h3>
              <div>
                <i class="fa-solid fa-graduation-cap"></i> {{Auth::user()->status}} {{Auth::user()->jurusan}} <br> {{Auth::user()->univ}}
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-xl-8 order-xl-1">
        <div class="card">
           <div class="card-header bg-white border-0">
                <h3>Selamat datang!</h3>
                <p>Semoga aktivitas belajarmu menyenangkan bersama BLS Sriwijaya.</p>
                <li class="list-group-item">
                    <img class="" src="{{url('BLS-Sriwijaya/images/e-book.png')}}" style="float: left; margin-right: 15px; width: 26px; height: 26px;">
                    <h3 style="padding-left: 16px; margin-right: -10px; margin-top: 5px;">Kursus saya: <span style="font-weight: 100;">Bantuan Hidup Dasar</span></h3>
                </li>
           </div>
           <a href="{{route('bab.resume')}}" class="btn btn-bls mt-2 mb-3">
              Lanjut Belajar
           </a>
        </div>
      </div>
    </div>
</div>

<div class="judul">
  <h1>Daftar Modul Pembelajaran</h1>
  <div class="sidenav" style="margin-bottom: 70%;">
    <button class="dropdown-btn">Pre-test
      <i class="fa fa-caret-down" style="padding-top:5px"></i>
    </button>
    <div class="dropdown-container">
      <a href="{{route('client.test')}}">Pre-test</a>
    </div>

      @foreach ($subs as $sub)
        <button class="dropdown-btn">{{$sub->sub_name}}
          <i class="fa fa-caret-down" style="padding-top:5px"></i>
        </button>
        <div class="dropdown-container">
            @foreach ($sub->babs as $bab)
            <a href="{{route('dashboard.show', $bab->id)}}">{{$bab->name}}</a>
            @endforeach
        </div>
      @endforeach

    <button class="dropdown-btn">Post-test
      <i class="fa fa-caret-down" style="padding-top:5px"></i>
    </button>
    <div class="dropdown-container">
      <a href="{{route('client.posttest')}}">Post-test</a>
    </div>
  </div>
</div>
         
  <script>
    function readURL(input) {

      var image = document.getElementById('imagePreview')
      var image = localStorage.getItem('image')

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else{
      localStorage.setItem('image', image.value)
    }
    }

    $("#imageUpload").change(function() {
        readURL(this);
    });


    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("activeDrop");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
  @include('sweetalert::alert')
@endsection
