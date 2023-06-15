@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil tes kamu</div>

                <div class="card-body">
                    <p class="mt-5">Total points: {{ $result->total_points }} points</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question Text</th>
                                <th>Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result->questions as $question)
                                <tr>
                                    <td>{{ $question->question_text }}</td>
                                    <td>{{ $question->pivot->points }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('dashboard.index')}}" class="btn btn-bls">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection