@extends('layouts.dashboard')




    @section('content')
        <div class="container-fluid col-10">
            <h3 class="text-dark mb-4 text-center">Profile</h3>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="{{asset('storage/'.$user->image)}}" width="160" height="160">
                            <div class="mb-3"><a href="{{route('home.editprofile', $user->id)}}" class="btn btn-primary btn-sm" type="button">Change Photo</a></div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary fw-bold m-0">Progress Overview</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="small fw-bold">Server migration<span class="float-end">20%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="visually-hidden">20%</span></div>
                            </div>
                            <h4 class="small fw-bold">Sales tracking<span class="float-end">40%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="visually-hidden">40%</span></div>
                            </div>
                            <h4 class="small fw-bold">Customer Database<span class="float-end">60%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="visually-hidden">60%</span></div>
                            </div>
                            <h4 class="small fw-bold">Payout Details<span class="float-end">80%</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="visually-hidden">80%</span></div>
                            </div>
                            <h4 class="small fw-bold">Account setup<span class="float-end">Complete!</span></h4>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="visually-hidden">100%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card textwhite bg-success text-white shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">User Settings</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input readonly class="form-control" type="text" id="username" placeholder="{{ $user->username}}" name="username"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input readonly class="form-control" type="email" id="email" placeholder="{{ $user->email }}" name="email"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Name</strong></label><input readonly class="form-control" type="text" id="first_name" placeholder="{{ $user->name }}" name="first_name"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Surname</strong></label><input readonly class="form-control" type="text" id="last_name" placeholder="{{ $user->surname }}" name="last_name"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><a href="{{route('home.editprofile', $user->id)}}" class="btn btn-primary btn-sm">Edit Details</a></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Contact Us</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('message') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3"><label class="form-label" for="title"><strong>Message Title</strong></label>
                                        <input class="form-control" type="text" id="title" placeholder="Message Title" name="title" required></div>

                                        <div class="mb-3 d-none"><label class="form-label" for="email"><strong>Email</strong></label>
                                        <input class="form-control" type="email" id="title" placeholder="Enter Your Email Address" name="email" value="{{$user->email}}" required></div>

                                        <div class="mb-3"><label class="form-label" for="description"><strong>Message Description</strong></label><br>
                                        <textarea class="form-control"  required id="description" rows="3" name="description">
                                        </textarea><br>

                                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Forum Settings</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="mb-3"><label class="form-label" for="signature"><strong>Signature</strong><br></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>
                                <div class="mb-3">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><strong>Notify me about new replies</strong></label></div>
                                </div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    @endsection

