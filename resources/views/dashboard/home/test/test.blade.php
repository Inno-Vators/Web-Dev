@extends('layouts.dashboard')


@section('content')
    <div class="container my-5">

        <form action="{{ route('home.submitTest', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
                <div class="card shadow-lg p-5 mb-5" style="width: 100%; height:100%; border-radius: 50px">
                    <div class="card-body ">
                        <div class="container-fluid">
                            @php
                                $x = 0;
                                // $question = "$course->questions";
                            @endphp

                                <strong>Question: {{ $question->question }} </strong>
                                <div class="mt-3"></div>
                                
                                <input type="number" value="{{ $question->id }}" class="form-control" name="question_id" required hidden>

                                <div class="form-check">
                                @foreach($question->options as $option)
                                    <input class="form-control" type="number" name="option_id" id="{{ $option->id }}" value="{{ $option->id }}" required hidden>

                                    <input class="form-control" type="number" name="status" id="{{ $option->status }}" value="{{ $option->status }}" required hidden>


                                    <input class="form-check-input" type="radio" name="option" id="{{ $option->option }}" value="{{ $option->option }}">

                                    <label class="form-check-label " for="{{ $option->option }}">
                                        {{ $option->option }}
                                        {{-- @if(!$loop->last) | @endif --}}
                                    </label><br><hr>
                                @endforeach
                                </div>


                        </div>

                    </div>
                </div>
            <button type="submit" class="btn btn-sm btn-outline-info" onclick="return confirm('Are you sure you want to Submit?')">Submit</button>
        </form>
        <div class="d-flex justify-content-center">

        </div>
    </div>
@endsection


