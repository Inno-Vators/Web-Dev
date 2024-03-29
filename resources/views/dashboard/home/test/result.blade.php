@extends('layouts.dashboard')
    @section('content')
        <div class="container col-10">
            <h3 class="text-dark mb-4 text-center">Answers</h3>

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

                                @foreach ($course->questions as $question)
                                    <strong>Question {{++$x}}: {{ $question->question}} </strong>
                                    <div class="mt-3"></div>
                                    {{-- <h1>{{ $question->question}}</h1> --}}
                                    @foreach($question->options as $option)
                                    @if ($question->answer)

                                    <p>{{$question->answer->option->status}}</p>
                                    @endif
                                        {{-- <p>{{ $option->option }}
                                        @if(!$loop->last) | @endif</p> --}}

                                        <input class="form-check-input" type="radio" name="answer" id="{{ $option->option }}" value="{{ $option->id }}" disabled>

                                        <label class="form-check-label " for="{{ $option->option }}">
                                            {{ $option->option }}
                                            {{-- @if(!$loop->last) | @endif --}}
                                        </label><br><hr>

                                    @endforeach

                                    {{-- @foreach ($option as $answer)
                                        Answer: {{$answer->option_id}}
                                    @endforeach --}}
                                    <br>
                                    <br>


                                @endforeach
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @endsection

