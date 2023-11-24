@extends('layout.app')
@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </head>
    <body>
        <div class="container_top">
            <img src="/image/nga-antri-logo.jpg" alt="">
        </div>

        <div class="money_container">
            <div class="money_content">
                <div class="lbl_hi" id="name">Hi, Joshua</div>
                    <div class="money">
                        <img src="/image/rupiah-logo.png" alt=""class="lbl_hi">
                        <div class="lbl_hi">150,000</div>
                    </div>
            </div>
        </div>

        <div class="category"><h1>Favorite</h1></div>
        <div class="favorite_container">
            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/menu-images/nasi-hainam.jpg" alt="" class="foto_makanan">
                    <div class="nama_makanan">Nasi Hainam</div>
                    <div class="tempat_makanan">Nasi Hainam</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/menu-images/nasi-katsu.jpeg" alt="" class="foto_makanan">
                    <div class="nama_makanan">Nasi Katsu</div>
                    <div class="tempat_makanan">Nasi Hainam</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>
        </div>
        
        <div class="category" id="recommend_category"><h1>Recommended for you</h1></div>
        <div class="recommend_container">
            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>
        </div>
        
        {{-- <div class="category" id="cheap_category"><h1>Cheap</h1></div>
        <div class="cheap_container">
            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="{{ url('/menu') }}">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>
        </div> --}}
    
    </body>
    </html>
@include('layout.footer')
@endsection