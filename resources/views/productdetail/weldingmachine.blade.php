<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>亞皇實業有限公司| 專營切斷砂輪、研磨、拋光產品解決方案</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <!-- header -->
    <header class="container-fluid header-section">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 brand-logo">
                <a href="https://shengplus.com.tw/"><img src="{{ asset('img/logo.png') }}" class="img-fluid" alt=""></a>
            </div>
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-sm navbar-light nav-right ">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><img class="naitem-img" src="{{ asset('img/global.png') }}"></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">Spanish</a>
                                <a class="dropdown-item" href="#">Taiwan</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img class="naitem-img" src="{{ asset('img/bucket.png') }}"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="show_menu"><img class="naitem-img" src="{{ asset('img/dropdown_menu.png') }}"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav col-lg-6">
            <li class="nav-item">
                <a class=" nav-link" href="#">首頁</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">關於我們</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">產品</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">產品</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">最新消息</a>
            </li>
        </ul>
        <div class="input-group col-lg-3 search-section">
            <div class="search-container">
                <input type="search" class="search-input" placeholder="Search...">
                <button type="button" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </nav>
    <!-- router and download bar -->
    <div class="container-fluid download-section">
        <div class="router">
            <h1><i>&#47;&nbsp;</i> 手 持 雷 射 焊 接 機</h1>
        </div>
        <div class="downloader"><img src="{{ asset('img/download-file.png') }}"></div>
    </div>
    <!-- product introduction part -->

    <div id="home" class="container-fluid tab-pane active"><br>
        <div class="row section1">
            <!-- <div class="col-lg-6 sub-section1-img ">
                <img src="{{ asset('img/weldingmachine.png') }}" alt="" srcset="">
                <div class="sub-section-item">
                    <p>...</p>
                </div>
            </div> -->
            <div class="col-lg-6 sub-section-img">
                <img src="{{ asset('img/weldingmachine.png') }}">
            </div>
            <div class="col-lg-6 sub-section ">
                <div class="sub-section-content ">
                    <div class="yellow-bar">
                        <h2>手持式雷射焊接機</h2>
                        <p>WS - Core系列</p>
                    </div>
                    <div class="sub-section-item">
                        <p>W85xH146xD132cm</p>
                    </div>
                    <div class="sub-section-item">
                        <p>採用最新一代光線雷射器，配置手持焊接頭，簡單
                            操作、接縫美觀、焊接快速、無耗機材 等優勢，在
                            不鏽鋼板、鐵板、鍍鋅板、鋁合金、銅等金屬材料
                            方面焊接，可完美取代傳統 氬弧焊、電焊等工藝。</p>
                    </div>
                    <div class="sub-section-item">
                        <a href="http://" class="main-btn-black">加入詢價</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 sub-section1-content ">
                <div class="yellow-bar">
                    <h2>手持式雷射焊接機</h2>
                    <p>WS - Core系列</p>
                </div>
                <div class="sub-section-item">
                    <p>W85xH146xD132cm</p>
                </div>
                <div class="sub-section-item">
                    <p>採用最新一代光線雷射器，配置手持焊接頭，簡單
                        操作、接縫美觀、焊接快速、無耗機材 等優勢，在
                        不鏽鋼板、鐵板、鍍鋅板、鋁合金、銅等金屬材料
                        方面焊接，可完美取代傳統 氬弧焊、電焊等工藝。</p>
                </div>
                <div class="sub-section-item">
                    <a href="http://" class="main-btn-black">加入詢價</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- =====Catagery tab view of product part==== -->
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
                <th><a href="#">最新消息</a></th> <!-- latest news -->
                <th colspan="2">
                    <a href="#">產品新知</a>
                    <a href="">企業資訊</a>
                    <a href="">會議展覽</a>
                </th>
            </tr>
            <tr>
                <th><a href="#">聯絡我們</a></th> <!--contact us-->
                <th colspan="2"><a href="#">詢價紀錄</a></th>
            </tr>
        </table>
        <div class="col-lg-12 line-image-cover">
            <img src="{{ asset('img/line_message.png') }}" alt="">
        </div>
    </div>

    <!-- ==========news cards list============ -->

    <div class="container-fluid d-flex justify-content-center">

        <div class="col-lg-11 mt-3 news-tabview">
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#menu0">所有</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">研磨切斷方案</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">雷射焊接機</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu3">手持打包機</a>
                </li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="menu0" class="tab-pane active"><br>
                    <img src="{{  asset('img/table_1.png') }}" alt="" srcset="" style="width: 100%;">
                    <img src="{{  asset('img/table_1_1.png') }}" alt="" srcset="" style="width: 100%;">
                </div>
                <div id="menu1" class="col-lg-11 tab-pane fade"><br>
                    <img src="{{  asset('img/table_2.png') }}" alt="" style="width: 100%;">
                </div>
                <div id="menu2" class="col-lg-11 tab-pane fade"><br>
                    <img src="{{  asset('img/table_3.png') }}" alt="" style="width: 100%;">
                </div>
                <div id="menu3" class="col-lg-11 tab-pane fade"><br>
                    <img src="{{  asset('img/table_4.png') }}" alt="" style="width: 100%;">
                </div>

                <div class="mt-4 mb-5 back-btn-container">
                    <a class="main-btn-black" href="#">返回</a>
                </div>
            </div>
            <div class="product-readme"></div>
        </div>
    </div>
    <!-- =========footer===========  -->
    <footer class="footer-area footer-area-v2 white-bg border">
        <div class="container-fluid">
            <div class="footer_widget pt-20 pb-20">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="widget contact-widget">
                            <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="" style="max-width:320px">
                            <ul class="contact-info mt-3">
                                <li>
                                    <i class="fal fa-map-marker-alt"></i>
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
                                        <ul class="social-link" style="list-style: none;">
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
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".carousel").slick({
                centerMode: true,
                centerPadding: "0px",
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                focusOnSelect: true
            });


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