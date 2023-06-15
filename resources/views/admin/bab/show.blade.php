@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Detail Materi')}} <b class="text-danger">{{ $bab->name}}</b> </h1>
                    <a href="{{ route('admin.bab.index') }}" class="btn btn-danger btn-sm shadow-sm">{{ __('Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subs_id">{{ __('Sub Modul') }}</label>
                                <p class="form-control">{{$bab->subs->sub_name}}</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="name">{{ __('Nama Bab') }}</label>
                        <p class="form-control">{{$bab->name}}</p>
                    </div>

                    <div class="form-group">
                        <label for="judul_sub_bab_1">{{ __('Judul Sub Bab 1') }}</label>
                        <p class="form-control">{{$bab->judul_sub_bab_1}}</p>
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_1">{{ __('Isi Sub Bab 1') }}</label>
                        <p class="form-control">{{$bab->isi_sub_bab_1}}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_1">{{ __('Gambar 1') }}</label> <br>
                                <img src="{{Storage::url($bab->image_1)}}" alt="image_materi" height="285px" width="100%">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_1">{{ __('Video 1') }}</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$bab->video_1}}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="judul_sub_bab_1">{{ __('Judul Sub Bab 2') }}</label>
                        <p class="form-control">{{$bab->judul_sub_bab_2}}</p>
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_1">{{ __('Isi Sub Bab 2') }}</label>
                        <p class="form-control">{{$bab->isi_sub_bab_2}}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_2">{{ __('Gambar 2') }}</label> <br>
                                <img src="{{Storage::url($bab->image_2)}}" alt="image_materi" height="285px" width="100%">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_2">{{ __('Video 2') }}</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$bab->video_2}}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="judul_sub_bab_1">{{ __('Judul Sub Bab 3') }}</label>
                        <p class="form-control">{{$bab->judul_sub_bab_3}}</p>
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_1">{{ __('Isi Sub Bab 3') }}</label>
                        <p class="form-control">{{$bab->isi_sub_bab_3}}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_1">{{ __('Gambar 3') }}</label> <br>
                                <img src="{{Storage::url($bab->image_3)}}" alt="image_materi" height="285px" width="100%">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_1">{{ __('Video 3') }}</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$bab->video_3}}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="judul_sub_bab_1">{{ __('Judul Sub Bab 4') }}</label>
                        <p class="form-control">{{$bab->judul_sub_bab_4}}</p>
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_1">{{ __('Isi Sub Bab 4') }}</label>
                        <p class="form-control">{{$bab->isi_sub_bab_4}}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_1">{{ __('Gambar 4') }}</label> <br>
                                <img src="{{Storage::url($bab->image_4)}}" alt="image_materi" height="285px" width="100%">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_1">{{ __('Video 4') }}</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$bab->video_4}}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                 
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection