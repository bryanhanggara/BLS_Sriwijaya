

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
                <a href="{{route('client.test.show', $category->id)}}" class="list-group-item list-group-item-action disabled text-center">Mulai</a>
            </div>
        </div>
    </div>
</div>
@endsection