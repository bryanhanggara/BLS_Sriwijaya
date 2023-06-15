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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Tambah Materi') }}</h1>
                    <a href="{{ route('admin.bab.index') }}" class="btn btn-danger btn-sm shadow-sm">{{ __('Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.bab.update', $bab->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subs_id">{{ __('Sub Modul') }} <b class="text-danger">*</b></label>
                                <select name="subs_id" class="form-control">
                                    <option value="">Pilih Paket</option>
                                        @foreach ($subs as $sub)
                                            <option value="{{$sub->id}}">
                                                {{$sub->sub_name}}
                                            </option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="name">{{ __('Nama Bab') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('Nama Bab') }}" name="name" value="{{ old('name', $bab->name) }}" />
                    </div>

                    <div class="form-group">
                        <label for="judul_sub_bab_1">{{ __('Judul Sub Bab 1') }}</label>
                        <input type="text" class="form-control" id="judul_sub_bab_1" placeholder="{{ __('Judul Sub Bab') }}" name="judul_sub_bab_1" value="{{ old('judul_sub_bab_1', $bab->judul_sub_bab_1) }}" />
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_1">{{ __('Isi Sub Bab 1') }}</label>
                        <textarea class="form-control" id="isi_sub_bab_1" placeholder="{{ __('Isi Sub Bab') }}" name="isi_sub_bab_1" value="{{ old('isi_sub_bab_1', $bab->isi_sub_bab_1) }}" cols="30" rows="10">{{$bab->isi_sub_bab_1}}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_1">{{ __('Gambar 1') }} <b class="text-danger">*</b></label>
                                <input type="file" class="form-control" id="image_1" name="image_1" value="{{ old('image_1', $bab->image_1) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_1">{{ __('Video 1') }}</label>
                                <input type="url" class="form-control" id="video_1" name="video_1" value="{{ old('video_1', $bab->video_1) }}" placeholder="Link video youtube"/>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="judul_sub_bab_2">{{ __('Judul Sub Bab 2') }}</label>
                        <input type="text" class="form-control" id="judul_sub_bab_2" placeholder="{{ __('Judul Sub Bab') }}" name="judul_sub_bab_2" value="{{ old('judul_sub_bab_2', $bab->judul_sub_bab_2) }}" />
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_2">{{ __('Isi Sub Bab 2') }}</label>
                        <textarea class="form-control" id="isi_sub_bab_2" placeholder="{{ __('Isi Sub Bab') }}" name="isi_sub_bab_2" value="{{ old('isi_sub_bab_2', $bab->isi_sub_bab_2) }}" cols="30" rows="10">{{$bab->isi_sub_bab_2}}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_2">{{ __('Gambar 2') }} <b class="text-danger">*</b></label>
                                <input type="file" class="form-control" id="image_2" name="image_2" value="{{ old('image_2', $bab->image_2) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_2">{{ __('Video 2') }}</label>
                                <input type="url" class="form-control" id="video_2" name="video_2" value="{{ old('video_2',$bab->video_2) }}" placeholder="Link video youtube"/>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="judul_sub_bab_3">{{ __('Judul Sub Bab 3') }}</label>
                        <input type="text" class="form-control" id="judul_sub_bab_3" placeholder="{{ __('Judul Sub Bab') }}" name="judul_sub_bab_3" value="{{ old('judul_sub_bab_3', $bab->judul_sub_bab_3) }}" />
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_3">{{ __('Isi Sub Bab 3') }}</label>
                        <textarea class="form-control" id="isi_sub_bab_3" placeholder="{{ __('Isi Sub Bab') }}" name="isi_sub_bab_3" value="{{ old('isi_sub_bab_3') }}" cols="30" rows="10">{{$bab->isi_sub_bab_3}}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_3">{{ __('Gambar 3') }} <b class="text-danger">*</b></label>
                                <input type="file" class="form-control" id="image_3" name="image_3" value="{{ old('image_3', $bab->image_3) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_3">{{ __('Video 3') }}</label>
                                <input type="url" class="form-control" id="video_3" name="video_3" value="{{ old('video_3' , $bab->video_3) }}" placeholder="Link video youtube"/>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="judul_sub_bab_4">{{ __('Judul Sub Bab 4') }}</label>
                        <input type="text" class="form-control" id="judul_sub_bab_4" placeholder="{{ __('Judul Sub Bab') }}" name="judul_sub_bab_4" value="{{ old('judul_sub_bab_4', $bab->judul_sub_bab_4) }}" />
                    </div>

                    <div class="form-group">
                        <label for="isi_sub_bab_4">{{ __('Isi Sub Bab 4') }}</label>
                        <textarea class="form-control" id="isi_sub_bab_4" placeholder="{{ __('Isi Sub Bab') }}" name="isi_sub_bab_4" value="{{ old('isi_sub_bab_4') }}" cols="30" rows="10">{{$bab->isi_sub_bab_4}}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_4">{{ __('Gambar 4') }}</label>
                                <input type="file" class="form-control" id="image_4" name="image_4" value="{{ old('image_4', $bab->image_4) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_4">{{ __('Video 4') }}</label>
                                <input type="url" class="form-control" id="video_4" name="video_4" value="{{ old('video_4', $bab->video_4) }}" placeholder="Link video youtube"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection