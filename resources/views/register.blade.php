@extends('layout.master')
@section('content')
    <div class="container d-lg-block p-3 my-auto align-bottom">
        <div class="row justify-content-center " >    
            <div class=" col-lg-4 p-5 text-center align-middle bg-white">
                <span class="d-lg-flex justify-content-center fs-3 my-auto mt-5">ngapain antri, kalau bisa</span>
                <img src={{ asset('/image/nga-antri-logo.jpg') }} alt="..." >
            </div>
            <div class="col-lg-5 p-5" style="background-color:#FFBFBF">
                <span class="fs-4 fw-bold">Create Account</span>
                <div class="row my-2">
                    <div class="col-lg-6">
                        <label for="InitialName" class="form-label fw-bold">First Name</label>
                        <input type="iniName" class="form-control" id="InitialName" aria-describedby="nameHelp" placeholder="andi">
                    </div>
                    <div class="col-lg-6">
                        <label for="EndName" class="form-label fw-bold">Last Name</label>
                        <input type="finalName" class="form-control" id="EndName" aria-describedby="name2Help" placeholder="bagas">
                    </div>
                </div>
                <div class="mb-lg-3">
                    <label for="phoneNumber" class="form-label fw-bold">Phone Number</label>
                    <input type="phone" class="form-control" id="phoneNumber" aria-describedby="phoneHelp" placeholder="+62xx">
                </div>
                <div class="mb-lg-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@email.com">
                </div>
                <div class="mb-lg-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password!23">
                </div>
                <div class="mb-lg-3">
                    <label for="confirmPassword" class="form-label fw-bold">Confirm Password</label>
                    <input type="confirmPassword" class="form-control" id="confirmPassword" placeholder="password!23">
                </div>
                <a href="{{ url('/') }} "type="button" class="d-flex btn btn-primary justify-content-center">Register</a>
                <span class="d-lg-flex mt-2">already have an account? <a href="{{ url('/login') }}" class="d-lg-flex link-dark">Login</a></span>
            </div>
            
        </div>    
    </div> 
@include('layout.footer')
@endsection