@extends('layouts.dashboard')

@section('content')
    <div class="container col-8 ">
        <img src="{{ asset('img/congrats.png') }}" alt="" class="img-fluid text center">
        <h1 class="text-center"><strong>Congratulations!!! <br> you have completed the test</strong></h1>
        <div class="d-flex justify-content-center my-3">
            <a class="btn btn-outline-info btn-sm" href="{{ route('home.results', $course->id) }}">View Result</a>
        </div>
    </div>
@endsection
