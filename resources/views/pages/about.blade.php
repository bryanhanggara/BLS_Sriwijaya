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

@extends('layout.app')

@section('title')
    BLS Sriwijaya
@endsection

@section('content')
<script>
    $(window).on('scroll', function () {
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
      } else {
        $('nav').removeClass('black');
      }
    })
</script>

<div class="head-container" id="home" style="margin-top: 190px;">
  <div class="quote">
    <p>Media Pembelajaran Bantuan Hidup Dasar untuk Resusitasi Kardiopulmoner</p>
    <h5>Pengenalan keadaan darurat yang mengancam jiwa, memberikan kompresi dada berkualitas tinggi, memberikan
      ventilasi yang sesuai, dan memberikan instruksi dalam penggunaan awal AED. </h5>
  </div>
  <div class="svg-image">
    <img src="{{url('BLS-Sriwijaya/images/bglanding.png')}}" alt="svg" style="margin-top:-50px;">
  </div>
</div>

<div id="topik_section">
  <div class="title">
    <center>
      <p style="font-size: 40px; padding-top: 100px">Topik pembelajaran</p>
    </center>
  </div>
  <br><br>
  <div class="course">
    <center>
      <div class="cbox">
        <div class="det" style="margin-bottom: 5%;"><a href="" style="text-align: center; pointer-events: none; cursor: default;">
          <img src="{{url('BLS-Sriwijaya/images/courses/book.png')}}">Pengenalan BHD</a></div>
        <div class="det" style="margin-bottom: 5%;"><a href="" style="text-align: center; pointer-events: none; cursor: default;">
          <img src="{{url('BLS-Sriwijaya/images/courses/d1.png')}}">Konsep Henti Jantung</a></div>
        <div class="det" style="margin-bottom: 5%;"><a href="" style="text-align: center; pointer-events: none; cursor: default;">
          <img src="{{url('BLS-Sriwijaya/images/courses/paper.png')}}">Konsep Henti Napas</a></div>
      </div>

      <div class="cbox">
        <div class="det" style="margin-bottom: 5%;"><a href="" style="text-align: center; pointer-events: none; cursor: default;">
          <img src="{{url('BLS-Sriwijaya/images/courses/book.png')}}">BHD pada Dewasa</a></div>
        <div class="det" style="margin-bottom: 5%;"><a href="" style="text-align: center; pointer-events: none; cursor: default;">
          <img src="{{url('BLS-Sriwijaya/images/courses/d1.png')}}">BHD pada Pediatri</a></div>
        <div class="det" style="margin-bottom: 5%;"><a href="" style="text-align: center; pointer-events: none; cursor: default;">
          <img src="{{url('BLS-Sriwijaya/images/courses/paper.png')}}">BHD pada Neonatal</a>
        </div>
      </div>
    </center>
  </div>
</div>

<div class="diffSection" id="about_section">
  <center>
    <p style="font-size: 50px; padding: 100px; margin-bottom: -3%;">Tentang</p>
  </center>
  <div class="about-content">
    <div class="side-image">
      <img class="sideImage" src="{{url('BLS-Sriwijaya/images/extra/e3.jpg')}}">
    </div>
    <div class="side-text">
      <h2>Apa itu BLS Sriwijaya?</h2>
      <p>BLS Sriwijaya adalah media pembelajaran Bantuan Hidup Dasar dengan metode <i>asynchronous</i> yang dirancang
        untuk mahasiswa keperawatan. <br>
        Pembelajaran dengan metode <i>asynchronous</i> memungkinkan kita untuk belajar secara fleksibel kapan pun dan
        dimana pun, serta mengulang pembelajaran sebanyak mungkin!<br>
        Di sini, kita akan belajar menggunakan teks, gambar, dan video mengenai beberapa keadaan darurat yang
        mengancam jiwa, teknik memberikan kompresi dada berkualitas tinggi, memberikan
        ventilasi yang sesuai, dan memberikan instruksi penanganan henti jantung sesuai algoritma pada Panduan
        <i>American Heart Association</i> Tahun 2020.<br>
        <br>Yuk, kita mulai belajar dengan semangat!
      </p>
    </div>
  </div>
</div>

<div id="makeitfull">
  <a href="#review_section"><img src="{{url('BLS-Sriwijaya/images/icon/makeitfull.png')}}"></a>
</div>

<div class="review">
  <div class="diffSection" id="review_section">
    <center>
      <p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;"><i>Website</i> ini telah
        divalidasi oleh</p>
    </center>
  </div>

  <div class="rev-container">
    <div class="rev-card">
      <div class="identity">
        <img src="{{url('BLS-Sriwijaya/images/dhona.jpg')}}">
        <p>Dhona Andhini, S.Kep.,Ns., M.Kep.</p>
        <h6>Dosen Bagian Keperawatan UNSRI</h6>
      </div>
    </div>

    <div class="rev-card">
      <div class="identity">
        <img src="{{url('BLS-Sriwijaya/images/maulia.jpg')}}">
        <p>dr. Maulia Sari Khairunnisa</p>
        <h6>Dokter Umum RS Siti Fatimah</h6>
      </div>
    </div>


    <div class="rev-card">
      <div class="identity">
        <img src="{{url('BLS-Sriwijaya/images/aldrich.jpeg')}}">
        <p>Aldrich Sancho Sapatan Nagara, S.Kom, M.Eng.</p>
        <h6>UI/UX Designer dan Developer di MASERP</h6>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="{{url('BLS-Sriwijaya/js/script.js')}}"></script>
 


@endsection
