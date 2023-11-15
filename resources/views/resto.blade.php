@extends('layout.app')
@section('content')
    <div class="container col-lg my-2">
        <div class="d-flex col-lg justify-content-center bg-body-tertiary">
            <div class="col-lg-3 p-0">
                <img src="{{ asset('/image/order-assets/hainam.png') }}" alt="">
            </div>
            <div class="col-lg-9">
                <h1 calss="d-flex fs-1">Xiao Kee Hainam</h1>
                <div class="d-flex" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    4,8 (1214 votes) <br>
                </div>
                Nasi Hainam, Nasi Putih, Ayam Rebus, Ayam Fillet, ...
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Kantin Payung
                </div>
                <div class="d-flex my-3 mx-2 align-item-bottom ">
                    <a href="{{ url('/menu') }}" type="button" class="d-flex btn btn-primary justify-content-center">Menu</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-lg my-2">
        <div class="d-flex col-lg justify-content-center bg-body-tertiary">
            <div class="col-lg-3 p-0">
                <img src="{{ asset('/image/order-assets/effata.png') }}" alt="">
            </div>
            <div class="col-lg-9">
                <h1 calss="d-flex fs-1">Bakmi Effata</h1>
                <div class="d-flex" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    4,7 (3571 votes) <br>
                </div>
                Bakmi Keriting, Bakmi Lebar, Bakso, Pangsit...
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Kantin Basement
                </div>
                <div class="d-flex my-3 mx-2 align-item-bottom ">
                    <a href="{{ url('/menu') }}" type="button" class="d-flex btn btn-primary justify-content-center">Menu</a>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
@endsection