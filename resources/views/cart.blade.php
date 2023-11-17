@extends('layout.app')
@section('content')
    <div class="container d-lg-block py-lg-5 m-auto align-bottom">
        <div class="row justify-content-center ">    
            <div class="col-lg-6 p-5 bg-white">
                <div class="d-flex col-lg p-0 border mb-2">
                    <img src="{{ asset('/image/order-assets/hainam.png') }}" alt="" width="100vw" height="100vh">
                    <div class="mx-2">
                        <h2>Hainam Ayam Rebus</h2>
                        <span class="mx-auto">Rp. 23.000</span>
                    </div>
                </div>
                <div class="d-flex col-lg p-0 border mb-2">
                    <img src="{{ asset('/image/bakmie.png') }}" alt="" width="100vw" height="100vh">
                    <div class="mx-2">
                        <h2>Bakmi Ayam</h2>
                        <span">Rp. 30.000</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 p-4" style="background-color:#FFBFBF;">
                <span class="fs-4 fw-bold py-2 px-0">Payment</span>
                <div class="row p-0 bg-white rounded">
                    <div class="col-lg-9 pe-0 fw-bold">
                        <span>Sub Total</span>
                    </div>
                    <div class="col-lg-3 p-0 fw-bold">
                        <span>Rp. 53.000</span>
                    </div>

                    <div class="col-lg-9 pe-0">
                        <span>Fee</span>
                    </div>
                    <div class="col-lg-3 p-0">
                        <span>Rp. 1.500</span>
                    </div>

                    <div class="col-lg-9 pe-0">
                        <span>Total</span>
                    </div>
                    <div class="col-lg-3 p-0">
                        <span>Rp. 47.500</span>
                    </div>
                </div>

                <div class="row my-2 bg-white rounded">
                    <div class="fw-bold">
                        <a href="#paymentMethod" class="d-flex justify-content-center text-decoration-none link-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                            Choose Payment method
                        </a>
                    </div>
                    <div class="collapse" id="paymentMethod">
                        <div class="">
                            Ciee milih, cuma bisa cash sayang...
                        </div>
                    </div>
                </div>

                <div class="row my-2 bg-white rounded">
                    <div class="fw-bold">
                        <a href="#voucher" class="d-flex justify-content-center text-decoration-none link-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
                            Pake Voucher
                        </a>
                    </div>
                    <div class="collapse" id="voucher">
                        <div class="">
                            Ya haha, ga ada voucher sayang baru mulai
                        </div>
                    </div>
                </div>
                
                <div class="d-flex my-3 mx-2 align-items-bottom justify-content-center">
                    <a href="#" class="d-flex btn btn-primary justify-content-center">
                        Place Order
                    </a>
                </div>
            </div>
        </div>    
    </div> 
@include('layout.footer')
@endsection