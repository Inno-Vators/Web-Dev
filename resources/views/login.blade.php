@extends('layouts.app')




@section('content')

<div class="container">


    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-lg-5 p-md-5 ">
                                <div class="text-center ">
                                    <h4 class="text-dark mt-2">Welcome Back!</h4>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="p-lg-5 p-md-5 p-3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                    @error('email')
                                        <small class="text-danger"> {{ $message }}</small>
                                    @enderror
                                    </div>

                                    <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                    @error('password')
                                        <small class="text-danger"> {{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                    </div>
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                </form>
                                {{-- <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div> --}}
                                <div class="text-center mb-3"><a class="small text-decoration-none fs-6" href="{{ route('register') }}">Create an Account!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
