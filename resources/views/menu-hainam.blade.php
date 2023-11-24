@extends('layout.app')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <script src="https://kit.fontawesome.com/5c31f508b8.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="banner">
        <img src='/image/order-assets/hainam-banner.png' alt="">
        <div class="overlay-box">
            <div class="back-button">
                <i class="fa-solid fa-circle-chevron-left fa-2xl"></i>
            </div>
            <div class="resto">
                <h2>Xiao Kee Hainam</h2>
            </div>
            <div class="rate">
                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                <h2>4,8</h2>
            </div>
            <div class="votes"><h2>1000 Votes</h2></div>
        </div>
    </section>
    
    <section class="menu-list">
        <h1 class="food-list">Food</h1>
        <div class="row">
            <div class="coloumn">
                <div class="tittle">
                    <h2>Ayam Rebus</h2>
                </div>
                <div class="description">
                    <p>Nasi Hainam, Timun, Kuah, Ayam Rebus</p>
                </div>
                <div class="price">
                    <h2>25.000</h2>
                </div>
                <div class="images">
                    <img src='/image/menu-images/nasi-hainam.jpg'>
                </div>
                
                <div class="cart-button">
                    <a class="button-text" href="#">add to cart</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="coloumn">
                <div class="tittle">
                    <h2>Nasi Katsu</h2>
                </div>
                <div class="description">
                    <p>Nasi Hainam, Saus, Sambal, Ayam Katsu Fillet</p>
                </div>
                <div class="price">
                    <h2>22.000</h2>
                </div>
                <div class="images">
                    <img src='/image/menu-images/nasi-katsu.jpeg'>
                </div>
                
                <div class="cart-button">
                    <a class="button-text" href="#">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-list">
        <h1 class="drink-list">Drink</h1>
        <div class="row">
            <div class="coloumn">
                <div class="tittle">
                    <h2>Esteh Manis</h2>
                </div>
                <div class="description">
                    <p>teh manis, dengan es</p>
                </div>
                <div class="price">
                    <h2>5.000</h2>
                </div>
                <div class="images">
                    <img src='/image/menu-images/esteh.jpg'>
                </div>
                
                <div class="cart-button">
                    <a class="button-text" href="#">add to cart</a>
                </div>
            </div>
        </div>
    </section>
 
</body>
@include('layout.footer')
@endsection