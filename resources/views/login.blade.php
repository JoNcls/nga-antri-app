@extends('layout.master')
@section('content')
    <div class="container d-lg-block py-lg-5 m-auto align-bottom">
        <div class="row justify-content-center ">    
            <div class="col-lg-4 p-5 text-center align-middle bg-white">
                <span class="d-lg-flex justify-content-center fs-3 mt-5">ngapain antri, kalau bisa</span>
                <a href="{{ url('/')}}"><img src={{ asset('/image/nga-antri-logo.jpg') }} alt="..."></a>
            </div>

            <div class="col-lg-5 p-5" style="background-color:#FFBFBF;">
                <span class="fs-4 fw-bold py-2">Log in to your account</span>
                <br>
                <span>Welcome back! Please enter your details</span>
                <div class="mb-lg-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@email.com">
                </div>
                <div class="mb-lg-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password!23">
                </div>
                <a href="{{ url('/forgot') }}" class="d-lg-flex justify-content-end link-dark">Forgot Password</a>
                <a href="{{ url('/') }}" type="button" class="d-flex btn btn-primary justify-content-center">Login</a>
                <span class="d-lg-flex mt-2">doesn't have an account? <a href="{{ url('/register') }}" class="d-sm-flex link-dark">Create One!</a></span>
            </div>
        </div>    
    </div> 
@include('layout.footer')
@endsection