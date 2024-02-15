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
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="{{ asset('js/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
</head>

<body>

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
    <!-- ==============navbar============= -->
    <div class="container-fluid">
        <ul class="topbar">
            <li><a href="">首頁</a></li>
            <li><a href="">關於我們</a></li>
            <li><a href="">產品</a></li>
            <li><a href="">產品</a></li>
            <li><a href="">最新消息</a></li>
            <div class="input-group col-lg-3 search-section">
                <div class="search-container">
                    <input type="search" class="search-input" placeholder="Search...">
                    <button type="button" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </ul>
    </div>

    <!-- ==========image section=========== -->

    <div class="container-fluid welding-image-section">
        <img src="{{ asset('img/welding.png') }}" alt="" srcset="" style="width: 100%;">
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

    <!-- =====Catagery tab view of product part==== -->

    <div class="container mt-1 mb-5">
        <div class="tabview-container">
            <input type="radio" id="tab1" name="tab" checked>
            <label class="mb-1" for="tab1">
                <img src="{{ asset('img/tab-1.png') }}" alt="">
                雷射切管機
            </label>
            <input type="radio" id="tab2" name="tab">
            <label for="tab2">
                <img src="{{ asset('img/tab-2.png') }}" alt="">
                雷射切割機
            </label>
            <input type="radio" id="tab3" name="tab">
            <label for="tab3">
                <img src="{{ asset('img/tab-3.png') }}" alt="">
                雷射焊接機
            </label>
            <input type="radio" id="tab4" name="tab">
            <label for="tab4">
                <img src="{{ asset('img/tab-4.png') }}" alt="">
                雷射標籤機
            </label>
            <!-- ===================tabview-body====================== -->
            <div class="line"></div>
            <div class="content-container">
                <div class="content" id="c1">
                    <div class="row section ">
                        <div class="col-lg-6 sub-section-img ">
                            <img src="{{ asset('img/weldingmachine.png') }}" alt="" srcset="">
                        </div>
                        <div class="col-lg-6 sub-section ">
                            <div class="col-10 sub-section-content ">
                                <div class="yellow-bar">
                                    <h2>雷射焊接機</h2>
                                    <p>顛覆了傳統的雷射焊接機的工作模 式，用手持的方式替代以前固定光 路 ...</p>
                                </div>
                                <div class="sub-section-item">
                                    <a href="http://" class="main-btn-black">了解更多</a>
                                </div>
                                <!-- <div class="sub-section-item">
                                    <a href="http://">www.shengplus.com.tw.weldingmachine</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content" id="c2">
                <div class="row section ">
                            <div class="col-lg-6 sub-section-img ">
                                <img src="{{ asset('img/weldingmachine.png') }}" alt="" srcset="">
                            </div>
                            <div class="col-lg-6 sub-section ">
                                <div class="col-10 sub-section-content ">
                                    <div class="yellow-bar">
                                        <h2>雷射焊接機</h2>
                                        <p>顛覆了傳統的雷射焊接機的工作模 式，用手持的方式替代以前固定光 路 ...</p>
                                    </div>
                                    <div class="sub-section-item">
                                        <a href="#" class="main-btn-black">了解更多</a>
                                    </div>
                                    <!-- <div class="sub-section-item">
                                        <a href="http://">www.shengplus.com.tw.weldingmachine</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                </div>
                <div class="content" id="c3">

                </div>
                <div class="content" id="c4">

                </div>
            </div>
        </div>
    </div>

    <!-- 3d video carousel part-->

    <div class="container border">
        <div id="app"></div>
        <div class="slider">
            <div>
                <img src="{{asset('img/weldingmachine.png')}}" />
            </div>
            <div>
                <img src="{{asset('img/weldingmachine.png')}}" />
            </div>
            <div>
                <img src="{{asset('img/weldingmachine.png')}}" />
            </div>
            <div>
                <img src="{{asset('img/weldingmachine.png')}}" />
            </div>
        </div>

    </div>

    <!--=======News section========= -->
    <div class="container mt-5 border">
        <div class="title col-lg-12 ml-5">
            <h3>最新消息</h3>
        </div>
        <div class="news-section col-lg-10 ml-10">
            <div class="news-date">
                <p>06</p>
                <p>2024-01</p>
            </div>
            <div class="news-contents">
                <div class="news-contents-item1">
                    <p class="news-name"> 台 灣 國 際 雷 射 展 </p><a href="">展覽資訊</a>
                </div>
                <div class="news-contents-item2">
                    醫療美容、雷射手術、材料熱處理、感測、非接觸性量測、化學光譜研究、光通訊、光儲存、軍事國防、文創應用…等。
                </div>
            </div>
        </div>

        <!--  -->
        <div class="news-section col-lg-10 ml-10">
            <div class="news-date">
                <p>06</p>
                <p>2024-01</p>
            </div>
            <div class="news-contents">
                <div class="news-contents-item1">
                    <p class="news-name"> 台 灣 國 際 雷 射 展 </p><a href="">展覽資訊</a>
                </div>
                <div class="news-contents-item2">
                    醫療美容、雷射手術、材料熱處理、感測、非接觸性量測、化學光譜研究、光通訊、光儲存、軍事國防、文創應用…等。
                </div>
            </div>
        </div>
        <div class="news-section col-lg-10 ml-10">
            <div class="news-date">
                <p>06</p>
                <p>2024-01</p>
            </div>
            <div class="news-contents">
                <div class="news-contents-item1">
                    <p class="news-name"> 台 灣 國 際 雷 射 展 </p><a href="">展覽資訊</a>
                </div>
                <div class="news-contents-item2">
                    醫療美容、雷射手術、材料熱處理、感測、非接觸性量測、化學光譜研究、光通訊、光儲存、軍事國防、文創應用…等。
                </div>
            </div>
        </div>
    </div>

    <!-- ============footer=========  -->

    <footer class="footer-area footer-area-v2 white-bg  mt-5">
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
                                <div class="">cmdnmkk
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

            $(".slider").slick({
                centerMode: true,
                centerPadding: "0px",
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                focusOnSelect: true
            });

            console.log(`=========s=========`)

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