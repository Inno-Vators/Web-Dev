@extends('layouts.dashboard')
    @section('content')
        <div class="container-fluid">
            <h3 class="text-dark mb-4 text-center">Courses</h3>
            <div class="card shadow col-md-8 mx-auto">
                <div class="card-body">
                    <div class="p-3">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Level</th>
                                        <th>Add Question</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $course->name }}</td>
                                            <td>{{ $course->level }}</td>
                                            <td><a class="btn btn-outline-info btn-sm" href="{{route('admin.courses.questions.index', $course->id)}}">Questions</a></td>
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

