<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---tiny-cdn--->
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <!--font-awasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap cdn--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--script for Multiple-image-carousal--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>


    <script>
        function slideSlider() {
            $("#slider-scroller").css({
                "left": "0%",
                "transition": "all 0s linear"
            });
            $("#slider-scroller").css({
                "left": String(parseInt($("#slider-scroller").css("left")) - 500) + "px",
                "transition": "all 5s linear"
            });
            setTimeout(function() {
                moveSliderItem()
            }, 2635);
        }

        function moveSliderItem() {
            $("#slider-scroller div").first().detach().appendTo($("#slider-scroller"));
            slideSlider();
        }

        slideSlider();
    </script>
    <script type="module">
        var slider = tns({
        container: ".my-slider",
        items: 4,
        gutter: 20,
        slideBy: 1,
        mouseDrag: true,
        autoplay: true,
        autoplayButtonOutput: false,
        responsive: {
            0: {
            items: 1,
            nav: false
            },
            768: {
            items: 2,
            nav: true
            },
            1440: {
            items: 3
            }
        }
        });

  </script>

    <style>
        .container-fluid {
            width: 91%;
        }

        .navbar {
            padding: 20px 70px;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-item {
            margin-left: 30px;
        }

        .nav-item a {
            color: #232728;
            font-size: 16px;
            font-weight: 500;
        }

        .nav-item a:hover {
            text-decoration-color: rgb(94, 187, 160);
        }

        .dropdown-icon::after {
            content: "";
            position: absolute;
            width: 0.6em;
            height: 0.6em;
            border-right: 1px solid rgb(35, 39, 40);
            border-bottom: 1px solid rgb(35, 39, 40);
            transform: rotate(45deg);
            transition: all 0.5s ease 0s;
            top: 0.3125em;
            border-top: none !important;
            right: -25px;
        }

        .dropdown-icon:hover::after {
            top: 10px;
            transform: rotate(-135deg);
            cursor: pointer;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            position: absolute;
            left: 0px;
            background: rgb(255, 255, 255);
            border: 1px solid rgb(232, 232, 232);
            box-shadow: rgb(0 0 0 / 8%) 0px 10px 30px;
            border-radius: 8px;
            padding-top: 1.25em;
            padding-bottom: 1.25em;
            z-index: 99;
            width: 242px;

        }

        .dropdown-content a {
            text-decoration: none;
            display: block;
            line-height: 1.3125em;
            color: rgb(78, 82, 83);
            padding: 0.5625em 1.25em;
            display: inline-block;
            width: 15em;
        }

        .dropdown-content a:hover {
            background-color: rgb(239, 249, 246);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        .nav-item.dropdown a:hover {
            text-decoration: none !important;
        }

        .navbar-nav .dropdown-menu {
            position: absolute;
            float: none;
        }

        .call-icon {
            font-size: 1em;
            background: #f4a950;
            color: rgb(255, 255, 255);
            border-radius: 0.625em;
            margin-left: 2.0625em;
            cursor: pointer;
            position: relative;
            padding: 0.7em 1em;
        }

        .call-icon .ico {
            position: absolute;
            background: rgb(255, 255, 255);
            width: 1.875em;
            height: 1.875em;
            left: 0.4375em;
            top: 0.4375em;
            border-radius: 50%;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .fa-phone {
            color: #f4a950
        }

        span.font-medium {
            margin-left: 24px;
            font-weight: 500
        }

        li.active.nav-item,
        .dropdown {
            vertical-align: middle !important;
            margin-top: 10px;
        }

        .footer {
            --tw-bg-opacity: 1;
            background-color: rgb(35 39 40/var(--tw-bg-opacity));
            color: rgb(255 255 255/var(--tw-text-opacity));
            padding: 0px 100px !important;
        }

        .footer a {
            --tw-text-opacity: 1;
            color: rgb(255 255 255/var(--tw-text-opacity));
        }

        .footer li {
            padding: 7px 0px;
        }

        a.social-logo img {
            width: 24px !important;
            height: 24 !important;
            margin-right: 20px;
        }

        .popular-search {
            font-size: 20px !important;
            font-weight: bold;
            padding-bottom: 1rem;
            --tw-text-opacity: 1;
            color: rgb(255 255 255/var(--tw-text-opacity));
        }

        @media (min-width: 768px) and (max-width:1200px) {
            .footer {

                padding: 0px 40px !important;
            }

            .col-md-2 {

                flex: 0 0 25.666667% !important;
                max-width: 25.666667% !important;
                margin-bottom: 20px !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <a class="navbar-brand" href="#">
                    <img src=" {{ URL('images/kalyanihomes-logo.png') }}" alt="">
                </a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active nav-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="active nav-item"><a href="{{ url('aboutus') }}">About us</a></li>
                <li class="dropdown nav-item dropbtn">
                    <a class="dropdown-icon" data-toggle="dropdown" href="#">Our Location</a>
                    <ul class="dropdown-menu dropdown-content">
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                </li>
                <div style="margin-left:50px;" class="call-icon"><span class="ico">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                    <span class="font-medium">Contact Us</span>
                </div>
        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        <footer class="page-footer">
            <div class="container-fluid text-center text-md-left">
                <div class="row" style="padding-top:72px;">
                    <div class="col-md-2 mx-auto footer-home-logo">
                        <a class="footer-logo" href="#">
                            <img src=" {{ URL('images/kalyanihomes-logo.png') }}" alt="" width="150"
                                height="80">
                        </a>
                    </div>

                    <hr class="clearfix w-100 d-md-none">

                    <div class="col-md-2 mx-auto ">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Team</a>
                            </li>
                            <li>
                                <a href="#">Invester Relations</a>
                            </li>
                            <li>
                                <a href="#">Media</a>
                            </li>
                        </ul>

                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Blogs</a>
                            </li>
                            <li>
                                <a href="#">FAQ's</a>
                            </li>
                            <li>
                                <a href="#">REfer and Earn</a>
                            </li>
                            <li>
                                <a href="#">House Rules</a>
                            </li>

                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">T&C</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mx-auto">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">COVID-19</a>
                            </li>
                            <li>
                                <a href="#">Refunds</a>
                            </li>
                            <li>
                                <a href="#">Partnet With Us</a>
                            </li>
                            <li>
                                <a href="#">Cookie Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mx-auto flex-center social-logos">
                        <a class="social-logo" href="#">
                            <img src=" {{ URL('images/fb.png') }}" alt="">
                        </a>
                        <a class="social-logo" href="#">
                            <img src=" {{ URL('images/linked-in.png') }}" alt="">
                        </a>
                        <a class="social-logo" href="#">
                            <img src=" {{ URL('images/insta.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <hr class="footer-hr container-fluid" style="border-bottom: 1px solid #232728;margin: 0;" />
            <div class="container-fluid footer-copyright text-start py-3"
                style="--tw-text-opacity: 1;color: rgb(165 169 169/var(--tw-text-opacity)); font-size:13px;padding-top:42px !important;padding-bottom:40px !important;">
                Copyright ©
                2022 | All
                Rights Reserved by Kalyani Homes Pvt Ltd. |
                <a href="#">Sitemap:</a>
            </div>
            <div class="container-fluid text-center text-md-left">
                <h3 class="popular-search ">Popular Searches</h3>
                <div class="row">
                    <div class="col mx-1 mx-auto ">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Koramanghala</a>
                            </li>
                            <li>
                                <a href="#">PG in Marathahalli</a>
                            </li>
                            <li>
                                <a href="#">PG in Hinjewadi</a>
                            </li>
                            <li>
                                <a href="#">PG in Kothrud</a>
                            </li>
                            <li>
                                <a href="#">PG in Baner</a>
                            </li>
                            <li>
                                <a href="#">PG in Kondhwa</a>
                            </li>
                            <li>
                                <a href="#">PG in Viwan Nagar</a>
                            </li>
                            <li>
                                <a href="#">PG in Karve Nagar</a>
                            </li>
                        </ul>
                    </div>

                    <hr class="clearfix w-100 d-md-none">

                    <div class="col mx-1 mx-auto ">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                        </ul>

                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col mx-1 mx-auto">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col mx-1 mx-auto">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col mx-1 mx-auto">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>
                            <li>
                                <a href="#">PG in Bangalore</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>


</html>
