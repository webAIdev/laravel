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
    <style>
        #news_frame {
            header.header {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- =========header======== -->
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
    <!-- ==========news cards list============ -->
    <iframe id="news_frame" src="https://www.toolsbiotech.com/news_list.php" style="margin-top: 50px;border: none; width:100%; height: 1000px;"></iframe>

    <!-- <div class="container-fluid d-flex justify-content-center">

        <div class="col-lg-11 mt-3 news-tabview">
            <br>
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
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu4">特殊貴金屬</a>
                </li>
            </ul>
            <div class="tab-content ">
                <div id="menu0" class="tab-pane active "><br>
                    <div class="tab-section ">

                        <div class="card col-lg-4" style="width:400px">
                            <div class="card-body">
                                <div class="card-item-1">
                                    <button>紀錄</button>
                                    <p class="yello">2023 . 10 . 30</p>
                                    <p>研磨系金</p>
                                </div>
                                <h4 class="my-4 card-title">金屬研磨系列 金屬切斷系列 除漆除鏽系列</h4>
                                <p class="my-4 card-text">金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列</p>
                            </div>
                            <img class="card-img-bottom" src="{{ asset('img/news-1.png')}}" alt="Card image">
                        </div>
                        <div class="card col-lg-4" style="width:400px">
                            <div class="card-body">
                                <div class="card-item-1">
                                    <button>紀錄</button>
                                    <p class="yello">2023 . 10 . 30</p>
                                    <p>研磨系金</p>
                                </div>
                                <h4 class="my-4 card-title">金屬研磨系列 金屬切斷系列 除漆除鏽系列</h4>
                                <p class="my-4 card-text">金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列</p>
                            </div>
                            <img class="card-img-bottom" src="{{ asset('img/news-2.png')}}" alt="Card image">
                        </div>
                        <div class="card col-lg-4" style="width:400px">
                            <div class="card-body">
                                <div class="card-item-1">
                                    <button>紀錄</button>
                                    <p class="yello">2023 . 10 . 30</p>
                                    <p>研磨系金</p>
                                </div>
                                <h4 class="my-4 card-title">金屬研磨系列 金屬切斷系列 除漆除鏽系列</h4>
                                <p class="my-4 card-text">金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列</p>
                            </div>
                            <img class="card-img-bottom" src="{{ asset('img/news-3.png')}}" alt="Card image">
                        </div>
                        <div class="card col-lg-4" style="width:400px">
                            <div class="card-body">
                                <div class="card-item-1">
                                    <button>紀錄</button>
                                    <p class="yello">2023 . 10 . 30</p>
                                    <p>研磨系金</p>
                                </div>
                                <h4 class="my-4 card-title">金屬研磨系列 金屬切斷系列 除漆除鏽系列</h4>
                                <p class="my-4 card-text">金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列</p>
                            </div>
                            <img class="card-img-bottom" src="{{ asset('img/news-4.png')}}" alt="Card image">
                        </div>
                        <div class="card col-lg-4" style="width:400px">
                            <div class="card-body">
                                <div class="card-item-1">
                                    <button>紀錄</button>
                                    <p class="yello">2023 . 10 . 30</p>
                                    <p>研磨系金</p>
                                </div>
                                <h4 class="my-4 card-title">金屬研磨系列 金屬切斷系列 除漆除鏽系列</h4>
                                <p class="my-4 card-text">金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列</p>
                            </div>
                            <img class="card-img-bottom" src="{{ asset('img/news-5.png')}}" alt="Card image">
                        </div>
                        <div class="card col-lg-4" style="width:400px">
                            <div class="card-body">
                                <div class="card-item-1">
                                    <button>紀錄</button>
                                    <p class="yello">2023 . 10 . 30</p>
                                    <p>研磨系金</p>
                                </div>
                                <h4 class="my-4 card-title">金屬研磨系列 金屬切斷系列 除漆除鏽系列</h4>
                                <p class="my-4 card-text">金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列金屬研磨系列 金屬切斷系列 除漆除鏽系列 鏡面拋光系列</p>
                            </div>
                            <img class="card-img-bottom" src="{{ asset('img/news-6.png')}}" alt="Card image">
                        </div>
                    </div>
                </div>
                <div id="menu1" class="col-lg-11 tab-pane fade"><br>

                </div>
                <div id="menu2" class="col-lg-11 tab-pane fade"><br>

                </div>
                <div id="menu3" class="col-lg-11 tab-pane fade"><br>

                </div>
                <div id="menu4" class="col-lg-11 tab-pane fade"><br>

                </div>
            </div>
        </div>
    </div> -->
    <!-- ================email input ================ -->
    <!-- <div class="container-fluid search-email-section ">
        <div class="email-text">
            <h1>&#91; E D M 訂 閱 &#93;</h1>
        </div>
        <div class="search-container-news">
            <input type="text" class="search-input-news" placeholder="Email">
            <button class="search-button-news">
                訂閱
            </button>
        </div>
    </div> -->



    <!-- ========footer=========  -->
    <footer class="footer-area footer-area-v2 white-bg mt-5">
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
                                        <ul class="social-link">
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
      // Wait for the iframe content to load
      document.getElementById('news_frame').onload = function() {
      // Get the iframe document
      var iframeDocument = document.getElementById('news_frame').contentDocument;
        console.log(iframeDocument);
      // Remove elements by class name (you can use other methods to select elements)
      var elementsToRemove = iframeDocument.querySelector(".header");

      // Remove each element
      for (var i = 0; i < elementsToRemove.length; i++) {
        elementsToRemove[i].parentNode.removeChild(elementsToRemove[i]);
      }
    };
    </script>
</body>

</html>