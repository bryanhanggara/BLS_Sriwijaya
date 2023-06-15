@extends('layout.app')

@section('li')
<ul class="navbar-nav mx-auto">
    <li class="nav-item ">
      <a class="nav-link" href="#">Halo {{Auth::user()->name}} Selamat belajar {{$subs->sub_name}}</a>
    </li>
</ul>
@endsection

@section('content') <br><br><br><br>
    <div class="container">
        <h3>Modul <b>{{$subs->sub_name}}</b></h3>
        <p>
            Upgrade terus ilmu dan pengalaman <br>
            terbaru kamu di bidang kesehatan
        </p>
        <div class="row justify-content-center mt-4">
            @foreach ($subs->babs as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                           <b> {{$item->name}}</b>
                        </div>
                        <p>{{$item->judul_sub_bab_1}}</p>
                        <p>{{$item->isi_sub_bab_1}}</p>
                       
                      
                    </div>
                </div>
            @endforeach
            {{-- @foreach ($subs->babs as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                           <b> {{$item->name}}</b>
                        </div>
                      
                        <a href="{{route('course.index')}}" class="text-center">
                            <button class="btn btn-bls mt-3 mb-3">
                                Pelajari
                            </button>
                        </a>
                      
                    </div>
                </div>
            @endforeach --}}
        </div>
    </div>
    <br><br>
@endsection