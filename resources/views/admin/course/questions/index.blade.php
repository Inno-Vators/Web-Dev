@extends('layouts.dashboard')
    @section('content')
        <div class="container-fluid">
            <h3 class="text-dark mb-4 text-center">Questions</h3>
            <div class="card shadow col-md-7 mx-auto">
                <div class="card-body">
                    <div class="p-3">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.courses.index') }}" class="btn btn-sm btn-outline-info">
                                <i class="fa fa-arrow-left"></i>
                                Back
                            </a>
                            <a href="{{route('admin.courses.questions.addquestion', $course->id)}}" class="btn btn-sm btn-outline-success">
                                <i class="fa fa-plus"></i>
                                Add Question
                            </a>
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Options</th>
                                        <th>Edit Question</th>
                                        <th>Delete Question</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($course->questions as $question)
                                        <tr>
                                            <td>{{ $question->question }}</td>
                                            <td>
                                                @foreach($question->options as $option)
                                                    {{ $option->option }}
                                                    @if(!$loop->last) | @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('admin.courses.questions.edit', $course->id)}}"><i class="fa fa-edit"></i></a>

                                            </td>
                                            <td>
                                                <a class="btn btn-outline-danger btn-sm" href=""> <i class="fa fa-trash"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endsection

