@extends('layouts.dashboard')





@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4 text-center">Leaderboard</h3>
        @php
            $generalPosition = [];
            $p = 0;
            foreach ($allusers->sortByDesc('points') as $posuser){

                array_push($generalPosition, $posuser->id);
            }
            $id= array_search(Auth::id(), $generalPosition) + 1;

        @endphp

        <div class="card shadow mt-3 col-md-8 mx-auto">
            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <h3><strong>Your Current Position</strong></h3>
                <div class="card-body">
                    <div class="row">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Username</th>
                                    <th>Points</th>
                                    <th>Total Coins Earned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $id }}</td>
                                    <td><img class="rounded-circle me-2" width="30" height="30" src="{{asset('storage/'.$user->image)}}">{{ $user->username }}</td>
                                    <td>{{ $user->points }}</td>
                                    <td>{{ $user->totalcoins }}</td>
                                </tr>
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    {{-- <th>Position</th>
                                    <th>Username</th>
                                    <th>Points</th>
                                    <th>Total Coins Earned</th>
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="card shadow mt-3 col-md-8 mx-auto">
            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <h3><strong>World Ranking</strong></h3>
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Username</th>
                                <th>Points</th>
                                <th>Total Coins Earned</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $x = 0;

                            @endphp
                            @foreach ($allusers as $alluser)
                            <tr>
                                @if ($alluser->is_admin < 1)
                                    <td>{{++$x}}</td>
                                    <td><img class="rounded-circle me-2" width="30" height="30" src="{{asset('storage/'.$alluser->image)}}">{{ $alluser->username }}</td>
                                    <td>{{ $alluser->points }}</td>
                                    <td>{{ $alluser->totalcoins }}</td>

                                    @php
                                        array_push($generalPosition, $alluser);
                                    @endphp
                                @endif
                            </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Position</th>
                                <th>Username</th>
                                <th>Points</th>
                                <th>Total Coins Earned</th>
                            </tr>
                        </tfoot>

                    </table>
                    {{-- <div class="d-flex justify-content-center">
                        {!! $allusers->links() !!}

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
