@extends('layouts.dashboard')
    @section('content')
        <div class="container-fluid">
            <h3 class="text-dark mb-4 text-center">All Users</h3>
            <div class="card shadow col-md-10 mx-auto">
                <div class="card-body">
                    <div class="p-3">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Nationality</th>
                                        <th>Gender</th>
                                        <th>Date Of Birth</th>
                                        <th>Image</th>
                                        <th>Coins</th>
                                        <th>Progress</th>
                                        <th>Points</th>
                                        <th>Total Coins Earned</th>
                                        <th>Edit User</th>
                                        <th>Delete User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->surname }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->nationality }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->dob }}</td>
                                            <td><img src="{{asset('storage/'. $user->image )}}" class="img-fluid border rounded-circle" alt=""></td>
                                            <td>{{ $user->coins }}</td>
                                            <td>{{ $user->progress }}</td>
                                            <td>{{ $user->points }}</td>
                                            <td>{{ $user->totalcoins }}</td>
                                            <td><a href="" class="btn btn-sm btn-outline-info"><i class="fa fa-pencil-square-o"></i></a></td>
                                            <td><a href="" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-o"></i></a></td>
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

