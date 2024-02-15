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

    <!--==============Router-bar=============== -->
    <div class="container-fluid download-section">
        <div class="router">
            <h1><i>&#47;&nbsp;</i> 手 持 雷 射 焊 接 機</h1>
        </div>
    </div>
    <!--========================================-->

    <div class="container-fluid contactus-middle ">
        <div class="col-lg-4">
            <img class="img-welding" src="{{ asset('img/contact-us.png  ') }}">
        </div>
        <div class="col-lg-5 contactus-middle2">
            <div>
                <p style="font-size: 2rem;">亞 皇 實 業 有 限 公 司</p>
                <p style="font-size: 2rem;">SHENPLUS Technology Co., LTD.</p>
            </div>

            <div>
                <p style="font-size: 1.2rem;">Phone： 07-7252768</p>
                <p style="font-size: 1.2rem;">Fax： 07-7251508</p>
                <p style="font-size: 1.2rem;">統編： 27222574</p>
                <p style="font-size: 1.2rem;">地址： 802026高雄市苓雅區四維一路164號</p>
            </div>
            <div>
                <div class="form">
                    <div class="form-section">
                        <input type="text" class="left1 form-control" id="company-name" name="company_name" placeholder="公司名稱"></input>
                        <input type="text" class="right1 form-control" id="client-name" name="client_name" placeholder="客戶名稱">
                        <inputv>
                    </div>
                    <div class="form-section">
                        <input type="text" class="left2 form-control" id="title" name="title" placeholder="抬頭職稱"></input>
                        <input type="text" class="right2 form-control" id="contact-method" name="contact_method" placeholder="聯絡方式"></input>
                    </div>
                    <div>
                        <input type="text" class="email form-control" id="email" name="email" placeholder="Email"></input>
                    </div>
                    <div>
                        <textarea type="text" class="footer form-control" id="message" name="message" rows="5" placeholder="留言"></textarea>
                    </div>
                    <button class="send-btn">send out</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================================== -->

    <div class="container-fluid form-container mt-5 mb-5">
        <div class="email-text">
            <h1>&#91; E D M 訂 閱 &#93;</h1>
        </div>
        <div class="input-group col-lg-3 search-section">
            <div class="search-container">
                <input type="search" class="search-input" placeholder="Search...">
                <button type="button" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

    <!-- ==================footer==================== -->

    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=chennai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
    </div>
 

    </footer>
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            console.log(document.getElementsByClassName("contactus-middle:nth-child(0)"));
            $(".nav-tabs a").click(function() {
                $(this).tab('show');
            });
            $('.nav-tabs a').on('shown.bs.tab', function(event) {
                var x = $(event.target).text(); // active tab
                var y = $(event.relatedTarget).text(); // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
            });

            $('.carousel-3d-autoplay-off').mdbCarousel3d({
                autoplay: false
            });


        });
    </script>
</body>

</html>