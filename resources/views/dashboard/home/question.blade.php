@extends('layouts.dashboard')


@section('content')
    <div class="container my-5">

        <form action="">
            {{-- @foreach ($questions as $question) --}}
                <div class="card shadow-lg p-5 mb-5" style="width: 100%; height:100%; border-radius: 50px">
                    <div class="card-body ">

                        {{-- {{-- <h5 class="card-title mb-4"> {{ $question->question }}</h5> --}}
                        {{-- <p class="card-body fs-5">Which of the following is not an example of a mammal animal.</p> --}}
                        <div class="container-fluid">

                            {{-- @if ($question->option1) --}}
                                <div class="form-check">
                                {{-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="{{ $question->option1 }}"> --}}
                                <label class="form-check-label " for="flexRadioDefault1">
                                    {{-- A: {{ $question->option1 }} --}}
                                </label>
                                </div>

                            {{-- @endif --}}
                            <hr>

                            {{-- @if ($question->option2) --}}
                                <div class="form-check">
                                {{-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="{{ $question->option2 }}"> --}}
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{-- B: {{ $question->option2 }} --}}
                                </label>
                                </div>
                            {{-- @endif --}}

                            {{-- @if($question->option3) --}}
                                <hr>
                                <div class="form-check">
                                {{-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="{{ $question->option3 }}"> --}}
                                <label class="form-check-label" for="flexRadioDefault3">
                                    {{-- C: {{ $question->option3 }} --}}
                                </label>
                                </div>
                            {{-- @endif --}}
                                <hr>

                            {{-- @if ($question->option4) --}}
                                <div class="form-check">
                                {{-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="{{ $question->option4 }}"> --}}
                                <label class="form-check-label " for="flexRadioDefault4">
                                    {{-- D: {{ $question->option4 }} --}}
                                </label>
                                </div>
                            {{-- @endif --}}

                        </div>

                    </div>
                </div>
            {{-- @endforeach --}}
            <button type="submit" class="btn btn-outline-info" onclick="return confirm('Are you sure you want to Submit?')">Submit</button>
        </form>
        <div class="d-flex justify-content-center">
            {{-- {!! $questions->links() !!} --}}
        </div>
    </div>
    <br>
    <br>
    <br>








@endsection




