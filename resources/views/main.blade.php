<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>亞皇實業有限公司| 專營切斷砂輪、研磨、拋光產品解決方案</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/style_o.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
</head>

<body class="bg-light">

    <!-- =================Header-Navbar=============== -->
    <div class="navbar navbar-expand-sm navbar-light bg-light  fixed-top">
        <div class="col-lg-7 d-flex justify-content-end">
            <a href="https://shengplus.com.tw/"><img src="{{ asset('img/logo.png') }}" class=" brand-logo" alt="" style="width: 287px;"></a>
        </div>
        <div class="col-lg-5 d-flex justify-content-end">
            <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img class="naitem-img" src="{{ asset('img/global.png') }}" style="width: 40px;">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">Spanish</a>
                    <a class="dropdown-item" href="#">Taiwan</a>
                </div>
            </div>
            <a class="navbar-brand" href="#"> <img src="{{ asset('img/bucket.png') }}" alt="bucket" style="width:40px;"></a>
            <a class="navbar-brand" href="#" id="show_menu"><img src="{{ asset('img/dropdown_menu.png') }}" alt="dropdown_menu" style="width:40px;"></a>
        </div>
    </div>




    <!-- <nav class="navbar navbar-expand-sm navbar-light nav-right fixed-top">
        <div class="col-lg-6">
            <a href="https://shengplus.com.tw/"><img src="{{ asset('img/logo.png') }}" class=" brand-logo" alt=""></a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><img class="naitem-img" src="{{ asset('img/global.png') }}"></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
            </li>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/bucket.png') }}" alt="bucket" style="width:40px;">
            </a>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('mg/dropdown_menu.png') }}" alt="dropdown_menu" style="width:40px;">
            </a>
            <li class="nav-item">
                <a class="nav-link" href="#"><img class="nav-link-img" src="{{ asset('img/bucket.png') }}"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="show_menu"><img class="nav-link-img" src="{{ asset('img/dropdown_menu.png') }}"></a>
            </li>
        </ul>
    </nav> -->

    <!-- ==============products Description========== -->

    <div class="container margin-top">

        @foreach($products as $index => $product)
        @if($index % 2 == 0)
        <div class="row section border">
            <div class="col-lg-6 sub-section ">
                <!-- <div class="sub-section-content"> -->
                <div class="yellow-bar">
                    <h2>{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                </div>
                <div class="sub-section-item">
                    <a href="/productdetail/{{$product->id}}" class="link-btn-readme">了解更多</a>
                </div>
                <div class="sub-section-item">
                    <a href="/product/{{$product->id}}">{{$product->link}}</a>
                </div>
                <!-- </div> -->
            </div>
            <div class="col-lg-6 sub-section-img">
                <img src='{{$product->image}}'>
            </div>
        </div>
        @else
        <div class="row section border">
            <div class="col-lg-6 sub-section-img">
                <img src='{{$product->image}}'>
            </div>
            <div class="col-lg-6 sub-section ">
                <!-- <div class="sub-section-content "> -->
                <div class="yellow-bar">
                    <h2>{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                </div>
                <div class="sub-section-item">
                    <a href="/productdetail/{{$product->id}}" class="link-btn-readme    ">了解更多</a>
                </div>
                <div class="sub-section-item">
                    <a href="/product/{{$product->id}}">{{$product->link}}</a>
                </div>
                <!-- </div> -->
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <!-- hambuger-menu -->
    <div class="hambuger-menu col-lg-8" id="menu">
        <div class="hambuger-item1 d-flex align-items-center">
            <div class="col-lg-11 d-flex justify-content-center">
                <img src="{{ asset('img/logo.png')}}" style="width: 287px;">
            </div>
            <div class="col-lg-1 d-flex justify-content-end" id="hambuger"><i style="font-size: 42px;" class="fa fa-times" aria-hidden="true"></i></div>
        </div>
        <table class="table mt-3">
            <tr>
                <th rowspan="4"><a href="#">產品介紹</a></th>
                <th><a href="/product/1">研磨切斷片</a></th> <!-- Grinding cut pieces -->
                <td>
                    <a href="#">金屬研磨系列</a>
                    <a href="#">金屬切斷系列</a>
                    <a href="#"> 除漆除鏽系列</a>
                    <a href="#"> 鏡面拋光系列</a>
                </td>
            </tr>
            <tr>
                <th><a href="/product/2">雷射焊接機</a></th> <!-- Laser welding machine -->
                <td>
                    <a href="#">手持雷射焊接機</a>
                    <a href="#">迷你手持焊接機</a>
                </td>
            </tr>
            <tr>
                <th><a href="/product/3">手持打包機</a></th> <!-- Handheld baler -->
                <td>
                    <a href="#">HS標準型</a>
                    <a href="#">HP進階型</a>
                    <a href="#">HT專業型</a>
                </td>
            </tr>
            <tr>
                <th><a href="/product/4">特殊貴金屬</a></th> <!-- special precious metals -->
                <td><a href="#">銥線 鉑線</a></td>
            </tr>
            <tr>
                <th><a href="/news">最新消息</a></th> <!-- latest news -->
                <th colspan="2">
                    <a href="#">產品新知</a>
                    <a href="">企業資訊</a>
                    <a href="">會議展覽</a>
                </th>
            </tr>
            <tr>
                <th><a href="/contactUs">聯絡我們</a></th> <!--contact us-->
                <th colspan="2"><a href="#">詢價紀錄</a></th>
            </tr>
        </table>
        <div class="col-lg-12 line-image-cover">
            <img src="{{ asset('img/line_message.png') }}" alt="">
        </div>
    </div>




    <!-- ========================footer====================== -->

    <footer class="footer-area footer-area-v2 white-bg mt-5">
        <div class="container-fluid">
            <div class="footer_widget pt-20 pb-20">
                <div class="row d-flex align align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="widget contact-widget">
                            <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="" style="max-width:320px">
                            <ul class="contact-info mt-3" style=" list-style-type: none;">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="false"></i>
                                    <p>台灣高雄市苓雅區四維一路164號</p>
                                </li>
                            </ul>

                            <div class="copyright-text mt-3 text-left">
                                <p>© Copyright 2020 亞皇實業有限公司. All rights reserved.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row justify-content-between">

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="">
                                    <div class="maps">
                                        <img src="{{ asset('img/map.png') }}" class="img-fluid">
                                        <ul class="social-link ">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="qrcode" style=" display: flex;align-items: center;  justify-content: flex-start;height: 100%;">
                                    <img src="{{ asset('img/download.png') }}" class="img-fluid" style="width: 50% !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {

            $("#show_menu").click(function() {
                console.log("-------------");
                $("#menu").fadeIn();
            });
            $("#hambuger").click(function() {
                $("#menu").fadeOut();
            });

        });
    </script>
</body>

</html>