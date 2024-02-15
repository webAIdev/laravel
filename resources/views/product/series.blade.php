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
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-sm bg-light">

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
    </nav> -->
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
    <!-- image section -->
    <div class="container-fluid welding-image-section">
        <img src="{{ asset('img/grinding.jpg') }}" alt="" srcset="" style="width: 100%;">
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

    <!-- Catagery tab view of product part -->
    <div class="container-fluid row mt-5">
        <div class="col-lg-3 d-flex justify-content-end">
            <div class="catergory-table col-lg-8">
                <table class="table">
                    <tr>
                        <td>金屬研磨系列 &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>金屬切斷系列 &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>除漆除鏽系列 &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>鏡面拋光系列 &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>拋光拉絲機系列 &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="product-filter">
                <select class="col-lg-2 form-control" id="sel1" name="sellist1">
                    <option>金屬</option>
                    <option>金屬</option>
                    <option>金屬</option>
                    <option>金屬</option>
                </select>
                <select class="col-lg-2 form-control" id="sel2" name="sellist2">
                    <option>切斷系</option>
                    <option>切斷系</option>
                    <option>切斷系</option>
                    <option>切斷系</option>
                </select>
                <select class="col-lg-2 form-control" id="sel3" name="sellist3">
                    <option>漆除鏽系列</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <select class="col-lg-2 form-control" id="sel34" name="sellist4">
                    <option>漆除</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="products">
                <div class="series-card">
                    <img src="{{ asset('img/1.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/2.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/3.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/4.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/5.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/6.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/5.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/3.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/2.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/4.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/1.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
                <div class="series-card">
                    <img src="{{ asset('img/6.png') }}">
                    <p class="title">金屬切斷</p>
                </div>
            </div>
        </div>
    </div>

    <!--  -->
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