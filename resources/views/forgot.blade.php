@extends('layout.master')
@section('content')
    <div class="container d-lg-block p-3 my-auto align-bottom">
        <div class="row justify-content-center ">    
            <div class=" col-lg-4 p-5 text-center align-middle bg-white">
                <span class="d-lg-flex justify-content-center fs-3 my-auto mt-5">ngapain antri, kalau bisa</span>
                <img src={{ asset('/image/nga-antri-logo.jpg') }} alt="..." >
            </div>

            <div class=" col-lg-5 p-5" style="background-color:#FFBFBF">
                <span class="fs-4 fw-bold">Reset your Password</span>
                <br>
                <span>Please enter your email to recieve password reset link</span>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@email.com">
                </div>
                <a href="{{ url('/login') }} "type="button" class="d-flex btn btn-primary justify-content-center">Submit</a>
                <span class="d-lg-flex mt-2">Remember it?<a href="{{ url('/login') }}" class="d-lg-flex link-dark">Login</a></span>
            </div>
        </div>
    </div> 
@include('layout.footer')
@endsection