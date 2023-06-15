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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create question') }}</h1>
                    <a href="{{ route('admin.sub_modul.index') }}" class="btn btn-danger btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.sub_modul.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="sub_name">{{ __('Nama Sub Modul') }}</label>
                        <input type="text" class="form-control" id="sub_name" placeholder="{{ __('Sub Modul') }}" name="sub_name" value="{{ old('sub_name') }}" />
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection