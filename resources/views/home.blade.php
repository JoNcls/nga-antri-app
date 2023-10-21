@extends('layout.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            .container_top{
                width: 1279px;
                height: 434px;
                margin:auto;
                text-align:center;
                background-color:white;
                padding-top:100px;
                margin-top:30px;
            }

            .container_top img{
                width: 640px;
                height: 217px;
            }

            .money_container{
                width: 1172px;
                height: 120px;
                margin:auto;
                background-color:#FBDDDD;
                margin-top:-50px;
                border-radius:5px;
            }

            .lbl_hi{
                font-size:36px;
                font-weight:bold;
                position: relative;
                top:30px;
            }

            #name{
                margin-left:30px;
            }

            .money_content{
                display:flex;
                justify-content:space-between;
            }

            .money{
                display:flex;
            }

            .money div{
                margin-right:30px;
            }

            .category{
                width: 1279px;
                margin:auto;
                margin-top:30px;
            }

            .category h1{
                margin-left:-12px;
            }

            .favorite_container{
                width: 1279px;
                margin:auto;
                display:flex;
                justify-content:space-between;
            }

            .recommend_container{
                width: 1279px;
                margin:auto;
                display:flex;
                justify-content:space-between;
            }

            .cheap_container{
                width: 1279px;
                margin:auto;
                display:flex;
                justify-content:space-between;
                margin-bottom:100px;
            }

            .food_content a{
                text-decoration:none;
            }

            .food_content{
                height:368.11px;
                width:280px;
                overflow:hidden;
                background-color:white;
            }

            .food_content .foto_makanan{
                width:280px;
                height:230px;
            }

            .nama_makanan{
                font-weight:bold;
                font-size:24px;
                margin-left:10px;
                margin-top:10px;
                color:black;
            }

            .tempat_makanan{
                font-size:18px;
                margin-left:10px;
                opacity: 80%;
                font-weight:bold;
                color:black;
            }

            .rating{
                width:26px;
                height:26px;
                margin-left:10px;
            }

            .lbl_rating{
                display:inline-block;
                font-size:18px;
                font-weight:bold;
                opacity:80%;
                color:black;
            }

            .harga{
                text-align:right;
                font-size:20px;
                margin-right:10px;
                margin-bottom:5px;
                font-weight:bold;
                color:black;
            }

            #recommend_category{
                margin-top:100px;
            }

            #cheap_category{
                margin-top:100px;
            }

        </style>
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
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>
        </div>
        
        <div class="category" id="recommend_category"><h1>Recommended for you</h1></div>
        <div class="recommend_container">
            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>
        </div>
        
        <div class="category" id="cheap_category"><h1>Cheap</h1></div>
        <div class="cheap_container">
            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>

            <div class="food_content">
                <a href="#">
                    <img src="/image/bakmie.png" alt="" class="foto_makanan">
                    <div class="nama_makanan">Bakmie Ayam</div>
                    <div class="tempat_makanan">Bakmie Effata</div>
                    <img src="/image/rating.png" alr="" class="rating">
                    <div class="lbl_rating">4,7</div>
                    <div class="harga">25.000</div>
                </a>    
            </div>
        </div>
    
    </body>
    </html>
@include('layout.footer')
@endsection