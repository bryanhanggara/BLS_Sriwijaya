@extends('layouts.admin')

@section('content')
    <h3 class="ml-4"><b>Feedback Pengguna</b></h3>

    <div class="container">
        <div class="row">
         @forelse ($users as $item)
         <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-header">Nama : {{$item->name}}</div>
                <div class="card-body">
                    1. {{$item->rating}}
                </div>
                <div class="card-body">
                    2. Apa yang paling di sukai user : <br> {{$item->like}}
                </div>
                <div class="card-body">
                    3. Yang tidak di sukai user :  <br> {{$item->no_like}}
                </div>
                <div class="card-body">
                    4. Pengalaman user :  <br> {{$item->feedback}}
                </div>
                <div class="card-body">
                    5. Rekomendasi : <br> {{$item->recomended}}
                </div>
            </div>
        </div>
         @empty
             
         @endforelse
        </div>
    </div>
@endsection

