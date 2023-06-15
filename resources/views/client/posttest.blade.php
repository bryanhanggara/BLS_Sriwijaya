

@extends('layouts.client')
@section('li')
<ul class="navbar-nav mx-auto">
    <li class="nav-item ">
      <a class="nav-link" href="#">Halo {{Auth::user()->name}} Silahkan Pilih Kuis Sesuai Modul!!</a>
    </li>
</ul>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">{{ $categories->name }}</div>
                <a href="{{route('client.test.show', $categories->id)}}" class="list-group-item list-group-item-action text-center">Mulai</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">{{ $category->name }}</div>
                <a href="{{route('client.test.show', $category->id)}}" class="list-group-item list-group-item-action text-center">Mulai</a>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" style="width: 400px" data-toggle="modal" data-target="#exampleModal">Keluar</button>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yeay, Kamu Selesai! Berikan Pendapat Kamu Tentang Course Ini!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('update.feedback')}}" id="profile_setup_frm" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-body">
                <div class="form-group">
                    <label for="rating" class="col-form-label">Seberapa puas kamu dengan website BLS Sriwijaya?</label>
                    <select id="" class="form-control" name="rating">
                      <option selected>
                        Pilih
                      </option>
                      <option>Sangat Baik</option>
                      <option>Baik</option>
                      <option>Cukup Baik</option>
                      <option>Kurang Baik</option>
                    </select>

                    <label for="like" class="col-form-label">Apa yang paling kamu sukai dari website BLS Sriwijaya:</label>
                    <textarea value="{{old('like', Auth::user()->like)}}" class="form-control" id="message-text" name="like"></textarea>

                    <label for="no_like" class="col-form-label">Bagian mana yang tidak kamu sukai dari website BLS Sriwijaya:</label>
                    <textarea value="{{old('no_like', Auth::user()->no_like)}}" class="form-control" id="message-text" name="no_like"></textarea>

                    <label for="feedback" class="col-form-label">Ceritakan Pengalamanu menggunakan website BLS Sriwijaya secara singkat:</label>
                    <textarea value="{{old('feedback', Auth::user()->feedback)}}" class="form-control" id="message-text" name="feedback"></textarea>

                    <label for="recomended" class="col-form-label">Apakah kamu merekomendasikan website BLS Sriwijaya kepada teman-teman mu :</label>
                    <select id="" class="form-control" name="recomended">
                      <option selected>
                        Pilih
                      </option>
                      <option>Iya, Saya merekomendasikan</option>
                      <option>Saya rasa tidak perlu</option>
                    </select>

                </div>
                <button type="submit" class="btn" style=" background-color: #DF2771; color: #fff;">Kirim Pesan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  @include('sweetalert::alert')
@endsection