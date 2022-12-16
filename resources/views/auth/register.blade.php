@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif




<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="border rounded" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="name"></div>

                                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Surname" name="surname"></div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Username" name="username"></div>

                                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Date Of Birth" name="dob"></div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nationality" name="nationality"></div>

                                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Gender" name="gender"></div>
                            </div>
                            <hr>
                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat"></div>
                            </div>
                            <hr>
                            <div class="mb-3"><input class="form-control form-control-user" type="file" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                            <button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
