@extends('layouts.dashboard')


@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4 text-center">Tests</h3>
        <div class="card shadow col-md-8 mx-auto">
            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Level</th>
                                <th>Tests</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->level }}</td>
                                    <td><a href="{{route('home.takeTest', $course->id)}}" class="btn btn-outline-primary btn-sm">Take Test</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Course Name </strong></td>
                                <td><strong>Level</strong></td>
                                <td><strong>Tests</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection




