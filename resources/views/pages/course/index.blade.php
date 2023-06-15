@extends('include.navbar')

@section('li')
<ul class="navbar-nav mx-auto">
  <li class="nav-item ">
    <a class="nav-link" href="{{route('dashboard.index')}}">Kursus</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('about')}}">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#topik_section">Topik</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#about_section">Tentang</a>
  </li>
</ul>
@endsection

@extends('layout.course')

@section('content')
     <!-- main -->
    <main class="content" id="quarto-document-content">

      <header id="title-block-header" class="quarto-title-block default">
        <div class="quarto-title">
          <h1 class="title d-none d-lg-block" style="margin-top: 12%">{{$bab->name}}</h1>
          <h1 class="title d-block d-lg-none" style="margin-top: 20%">{{$bab->name}}</h1>
        </div>

      </header>

      <section id="course-overview" class="level2">
        <h2  class="anchored" data-anchor-id="course-overview" style="margin-left: -29px;">{{$bab->judul_sub_bab_1}}
        </h2>
      </section>

      <section id="pedoman" class="level2">
        <p style="text-align:justify" id="result" data-anchor-id="course-overview">
          {!!$bab->isi_sub_bab_1!!}
        </p>
      </section>

      <section id="algoritma" class="level2">
        @php($image = $bab->image_1)
        <img style="width: 100%; height: 400px; object-fit: cover;" class="@if($image == null) d-none @else d-block @endif"   src="@if($image == null) {{ asset("storage/profile_images/profil-80.jpg") }}  @else {{ asset("storage/$image") }} @endif" id="image_preview_container">
        <iframe class="embed-responsive-item @if($image == null) d-none @else d-block @endif" src="{{$bab->video_1}}" frameborder="0" allowfullscreen></iframe>
      </section>
       
       <section id="course-overview" class="level2">
        <h3 class="anchored" data-anchor-id="course-overview" style="margin-left: -29px;"><b>{{$bab->judul_sub_bab_2}}</b>
        </h3>
      </section>

      <section id="pedoman" class="level2">
        <p style="text-align:justify" data-anchor-id="course-overview">
          {!!$bab->isi_sub_bab_2!!}
        </p>
      </section>

      <section id="algoritma" class="level2">
        @php($image = $bab->image_2)
        <img width="100%" height="400px" class="@if($image == null) d-none @else d-block @endif" src="@if($image == null) {{ asset("storage/profile_images/default.jpeg") }}  @else {{ asset("storage/$image") }} @endif" id="image_preview_container">
        <iframe class="embed-responsive-item @if($image == null) d-none @else d-block @endif" src="{{$bab->video_2}}" frameborder="0" allowfullscreen></iframe>
      </section>

      <section id="course-overview" class="level2">
        <h3 class="anchored" data-anchor-id="course-overview" style="margin-left: -29px;"><b>{{$bab->judul_sub_bab_3}}  </b>
        </h3>
      </section>

      <section id="pedoman" class="level2">
        <p style="text-align:justify" data-anchor-id="course-overview">
          {!!$bab->isi_sub_bab_3!!}
        </p>
      </section>

      <section id="algoritma" class="level2">
        @php($image = $bab->image_3)
        <img width="100%" height="400px" class="@if($image == null) d-none @else d-block @endif" src="@if($image == null) {{ asset("storage/profile_images/default.jpeg") }}  @else {{ asset("storage/$image") }} @endif" id="image_preview_container">
        <iframe class="embed-responsive-item @if($image == null) d-none @else d-block @endif" src="{{$bab->video_3}}" frameborder="0" allowfullscreen></iframe>
      </section>

      <section id="course-overview" class="level2">
        <h3 class="anchored" data-anchor-id="course-overview" style="margin-left: -29px;"><b>{{$bab->judul_sub_bab_4}}</b>
        </h3>
      </section>

      <section id="pedoman" class="level2">
        <p style="text-align:justify" data-anchor-id="course-overview">
          {!!$bab->isi_sub_bab_4!!}
        </p>
      </section>

      <section id="algoritma" class="level2">
        @php($image = $bab->image_4)
        <img width="100%" height="400px" class="@if($image == null) d-none @else d-block @endif" src="@if($image == null) {{ asset("storage/profile_images/default.jpeg") }}  @else {{ asset("storage/$image") }} @endif" id="image_preview_container">
        <iframe class="embed-responsive-item @if($image == null) d-none @else d-block @endif" src="{{$bab->video_4}}" frameborder="0" allowfullscreen></iframe>
      </section>

      <?php
        $current_id = $bab->getNextBab()->id;
        $next_id = $current_id;
      ?>
      <div class="button">
        @if ($bab->getNextBab() && Session::has('last_opened_bab_id') && Session::get('last_opened_bab_id') == $bab->id)
          <a href="{{ route('dashboard.show', $next_id) }}" class=" fixed-button">Selanjutnya</a>
        @endif
      </div>
    </main> 
    
      @include('sweetalert::alert')
    <!-- /main -->
@endsection