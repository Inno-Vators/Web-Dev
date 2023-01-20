@extends('layouts.dashboard')
    @section('content')
        <div class="container-fluid">
            <h3 class="text-dark mb-4 text-center">Inbox</h3>
            <div class="card shadow col-md-10 mx-auto">
                <div class="card-body">
                    <div class="p-3">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Message Title</th>
                                        <th>Message Body</th>
                                        <th>Email</th>
                                        <th>Reply</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $message->title }}</td>
                                            <td>{{ $message->description }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>
                                                <form action="mailto:{{ $message->email }}">
                                                    <button type="submit" class="btn btn-sm btn-outline-info"><i class="fa fa-paper-plane-o"></i></button>                                                
                                                </form>

                                            </td>
                                            <td><a href="{{ route('admin.message.deleteMessage', $message->id) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you delete this message?')"><i class="fa fa-trash-o"></i></a></td>
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

