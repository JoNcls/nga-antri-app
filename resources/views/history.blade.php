@extends('layout.app')
@section('content')
    <div class="container col-lg my-2">
        <div class="d-flex col-lg p-3 bg-body-tertiary">
            <div class="col-lg-9">
                <div class="row p-0 d-flex">
                    <div class="col-lg-4 pe-0">
                        <span>Nasi Hainam</span>
                    </div>
                    <div class="col-lg-5 p-0">
                        <span>1x</span>
                    </div>
                    <div class="col-lg-3 p-0">
                        <span>Rp. 23.000</span>
                    </div>

                    <div class="col-lg-4 pe-0">
                        <span>Bakmi Ayam</span>
                    </div>
                    <div class="col-lg-5 p-0">
                        <span>1x</span>
                    </div>
                    <div class="col-lg-3 p-0">
                        <span>Rp. 30.000</span>
                    </div>
                </div>
            </div>
            <div class="d-flex col-lg-3 align-items-center">
                <button type="button" class="d-flex btn btn-primary justify-content-center" data-bs-toggle="modal" data-bs-target="#history_receipt">Check Reciept</button>
            </div>
            <div class="modal fade" id="history_receipt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center">
                                    Receipt #01XXX338
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span class="fs-4 fw-bold py-2 px-0">Payment: Cash</span>
                                <div class="row p-0 bg-white rounded">
                                    <div class="col-lg-9 pe-0 ">
                                        <span>Nasi Hainam</span>
                                    </div>
                                    <div class="col-lg-3 p-0 ">
                                        <span>Rp. 23.000</span>
                                    </div>
                                    <div class="col-lg-9 pe-0">
                                        <span>Bakmi Ayam</span>
                                    </div>
                                    <div class="col-lg-3 p-0">
                                        <span>Rp. 30.000</span>
                                    </div>
                                    <div class="col-lg-9 pe-0">
                                        <span>Fee</span>
                                    </div>
                                    <div class="col-lg-3 p-0">
                                        <span>Rp. 1.500</span>
                                    </div>
                                    <hr>
                                    <div class="col-lg-9 pe-0">
                                        <span>Total</span>
                                    </div>
                                    <div class="col-lg-3 p-0">
                                        <span>Rp. 47.500</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@include('layout.footer')
@endsection