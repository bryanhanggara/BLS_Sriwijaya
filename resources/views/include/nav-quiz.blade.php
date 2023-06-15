<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">
        <img src="{{url('BLS-Sriwijaya/images/logo.png')}}" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Halo {{Auth::user()->name}} Selamat Mengerjakan {{$categories->name}}</a>
            </li>
        </ul>
      <div class="dropdown drop">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @php($profile_image = auth()->user()->profile_image)
          <img class="rounded-circle" width="30px" height="30px" src="@if($profile_image == null) {{ asset("storage/profile_images/profil-80.jpg") }}  @else {{ asset("storage/$profile_image") }} @endif" id="image_preview_container">
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          @guest
          <button class="dropdown-item" type="button" onclick="event.preventDefault();location.href='{{url('login')}}'">
            <span class="logout">
            <i class="fa-solid fa-arrow-right-from-bracket"></i> Login
        `   </span>
          </button>
          @endguest

          @auth
               <form action="{{url('logout')}}" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit"><span class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Logout</span></button>
                </form>
          @endauth
          <a href="{{route('profile')}}">
            <button class="dropdown-item" type="button">
              <span class="logout">
              <i class="fa-solid fa-user"></i> Edit Profile
             </span>
            </button> 
          </a>
        </div>
      </div>
    </div>
</nav>