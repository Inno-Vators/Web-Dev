@extends('layouts.dashboard')
    @section('content')
        <div class="container-fluid">
            <h3 class="text-dark mb-4">Courses</h3>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                        <option value="10" selected="">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>&nbsp;</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div> --}}
                    </div>
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
                                        <td><a href="{{route('questions', $course->id)}}"><button class="btn btn-outline-primary">Question</button></a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><strong>Course Name </strong></td>
                                    <td><strong>Level</strong></td>
                                    <td><strong>Add Question</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    @endsection

