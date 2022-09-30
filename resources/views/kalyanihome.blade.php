@extends('layouts.master')
@section('title', 'kalyani-home')
<style>
    .content {
        width: 100%;
    }

    h1.font-bold.banner-heading {
        line-height: 1.09375em;
        font-size: 64px;
        position: absolute;
        z-index: 99;
        width: 680px;
        top: 70;
        font-weight: bold;
        color: #232728;
        text-align: start;
    }

    .fa-search,
    .fa-arrow-right {
        color: #f4a950
    }

    .banner-row {
        padding: 20px 70px;
    }

    .banner-image {
        border-radius: 0.5em;
        /* margin-left: 50px; */
    }

    /* .part-bannerimg::after {
        content: "";
        background: linear-gradient(140.33deg, rgba(255, 255, 255, 0.7) 18.89%, rgba(254, 254, 254, 0.2) 48.98%, rgba(255, 255, 255, 0) 100.53%);
        left: 0px;
        top: 0px;
        width: 100% !important;
        height: 100% !important;
        position: absolute;

    } */

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 0 !important;
    }

    .card {
        border: none !important;
        margin-bottom: 35px;
    }

    .card .card-image::after {
        content: "";
        background: linear-gradient(90deg, rgb(230, 230, 230) 11.46%, rgba(255, 255, 255, 0) 67.58%);
        border-radius: 1em;
    }

    .card:hover::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(97.73deg, rgba(22, 28, 37, 0.8) 0%, rgba(41, 45, 50, 0.8) 86.17%);
        border-radius: .5em;
        top: 0px;
        left: 0px;
        z-index: 1;
        cursor: pointer;
        transition: all 0.2s ease 0s;
    }

    .card-description {
        font-size: 1.5em;
        color: #161c25;
        left: 1.33333em;
        max-width: 8.33333em;
        position: absolute;
        top: 0.541176em;
        font-weight: 500;
        line-height: normal;
    }

    .card:hover .card-description {
        opacity: 0;
    }

    .card:hover .description {
        opacity: 1;
        position: absolute;
        font-size: 1.2em;
        line-height: 1.23529em;
        top: 0.941176em;
        left: 1.08824em;
        z-index: 1;
        color: rgb(255, 255, 255);
        cursor: pointer;
        bottom: 0px;
        display: flex;
        flex-direction: column;
        padding-right: 8px;
        font-weight: 500;
    }

    .card .description {
        opacity: 0;
        position: absolute;
    }

    .card .arrow-icon {
        background: rgb(255, 255, 255);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        left: 3.2em;
        margin-top: 2.2em;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        margin-bottom: 0.666667em;
        position: absolute;
        bottom: 0.848485em;
        z-index: 2;
        cursor: pointer;
    }

    .card-image {
        border-radius: .5em;
    }

    .cities-info.project-info.d-flex {
        justify-content: space-evenly;
        padding-top: 3.1em;
        padding-bottom: 2.8em;
        position: relative;
    }

    #txt-search {
        border: none;
        padding: 0;
    }

    .banner-form-label {
        margin: 12px 15px;
        width: 245px;
        margin-left: 50px;
        color: #232728;
        font-weight: 600;
        font-size: 16px;
    }

    #btn-search {
        padding: 4px 5px 2px;
        left: -28px;
        position: relative;
        border: 0;
        background: none;
        z-index: 2;
        margin-left: 60px;
        margin-top: 17px;
    }

    .icon {
        background: rgb(22, 28, 37) !important;
        border-radius: 10px;
        width: 50px;
        height: 50px;
        cursor: pointer;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
    }

    form.search {
        border: 1px solid #e8e8e8;
        position: absolute;
        margin-top: -170px;
        background: #fff;
        border-radius: 0.5em;
    }

    .dropdown-toggle::after {
        content: "" !important;
        position: absolute !important;
        width: 0.6em !important;
        height: 0.6em !important;
        border-right: 1px solid rgb(35, 39, 40) !important;
        border-bottom: 1px solid rgb(35, 39, 40) !important;
        transform: rotate(45deg) !important;
        transition: all 0.5s ease 0s !important;
        top: 21px !important;
        border-top: none !important;
        right: 5px;
        border-left: none !important;
    }

    p.living-place {
        margin-bottom: 0px;
        color: #999999;
        font-weight: 400 !important;
    }

    .vl {
        border-left: 1px solid #e5e5e5;
        height: 53px;
        position: absolute;
        left: 42%;
        margin-left: -3px;
        top: 10px;
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 !important;
    }

    .dropdown-menu.show {
        position: absolute;
        width: 350px;
        height: 147px;
        will-change: transform;
        top: 17px !important;
        left: 0px;
        transform: translate3d(0px, 62px, 0px);
    }

    form.mobile-form {
        display: none;
    }

    .dropdown-item:hover {
        color: #16181b;
        text-decoration: none;
        background-color: rgb(239, 249, 246) !important;
    }

    .dropdown-item {
        padding: 0.6rem 1.5rem;
        border: none !important;
    }

    .dropdown-menu.show {
        display: block;
        border: none;
        --tw-shadow: 0 10px 15px -3pxrgba(0, 0, 0, .1), 0 4px 6px -4pxrgba(0, 0, 0, .1);
        --tw-shadow-colored: 0 10px 15px -3pxvar(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .cities-info.project-info.full-width {
        border-top: 1px solid rgb(238, 238, 238);
    }

    .icons-row.container-fluid.d-flex {
        padding: 0px 70px;
        justify-content: flex-end;
        padding-top: 1.5em;
        padding-bottom: 2.8em;
        position: relative;
        text-align: -webkit-center;
    }

    span.count-for.fm.lg\:ml-2 {
        font-size: 18px;
        color: rgb(78, 82, 83);
        font-family: Font-Book;
    }

    span.count.font-medium {
        font-size: 24px;
        color: rgb(35, 39, 40);
    }

    .city svg {
        margin-top: -12px;
    }

    .bg.homes.roofs,
        {
        background: #fafbfb;
        padding: 120px 20px 32px;
    }

    .sharing-moment {
        background: #fff;
        padding: 120px 20px 32px;
    }

    h2.homes-title.font-bold,
    .sharing-moment-title,
    .spot-light-title {
        font-size: 42px;
        text-align: center;

    }

    span.text-animation {
        --tw-text-opacity: 1;
        color: #f4a950;
        font-size: 42px;
    }

    p.homes-sub-title.font-book,
    .sharing-moment-sub-title.font-book,
    .spot-light-sub-title {
        font-size: 20px;
        color: #4E5253;
        text-align: center;
    }

    .tittle {
        font-size: 36px;
        font-weight: bold;
        color: #000;
    }

    .container.product-spec,
    .commercial-spec,
    .apartments-list,
    .rental-area-spec,
    .hotel-foods {
        padding: 100px 20px;
    }

    .wall-images {
        border-radius: 1em;
        margin-bottom: 20px;
    }

    .desc {
        font-size: 20px;
        color: #4E5253;
    }

    .commercial-infra::before {
        background: linear-gradient(rgb(22, 28, 37) 13.14%, rgba(226, 242, 240, 0) 100%);
        transform: matrix(1, 0, 0, -1, 0, 0) rotate(0deg);
        clip-path: polygon(0px 1%, 100% 28%, 100% 100%, 0px 100%);
    }

    .commercial-infra::before {
        content: "";
        position: absolute;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .rental::before {
        content: "";
        position: absolute;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 0;
        background: linear-gradient(rgb(22, 28, 37) 13.14%, rgba(226, 242, 240, 0) 100%);
        clip-path: polygon(0% 0%, 100% 46%, 100% 100%, 3% 100%, 0% 100%);
    }

    .we-make {
        background: #161c25;
        height: 700px;
    }

    .we-make-mobile-image::before {
        content: "";
        position: absolute;
        left: -147px;
        right: 0px;
        top: 119px;
        width: 8.5em;
        height: 1.1em;
        background: rgb(21, 21, 21);
        margin: auto;
        z-index: 9;
        border-radius: 0px 0px 1.5em 1.5em;
    }

    /* .mobile-bg {
        width: 34em;
        height: 34em;
        margin-top: -692px;
        background: url(images/background.png) center center / 44.4em 44.4em no-repeat rgb(94, 187, 159);
        inset: 0px;
        border-radius: 50%;
        z-index: 1;
        transition: all 1s ease 0s;
        margin-left: -130px;
    } */

    .we-make-title {
        font-size: 64px;
        font-weight: bold;
        padding-top: 150px;
        padding-bottom: 30px;
        color: #fff;
        line-height: 70px;
    }

    .teal {
        color: #f4a950;
    }

    .sponsors {
        background: #fafbfb;
        padding: 120px 20px 100px;
    }

    /* Slider */

    .sponsors #slider-container {
        position: relative;
        height: 150px;
        width: 100%;
        max-width: 1250px;
        /* top: 0; */
        left: 0;
        right: 0;
        /* bottom: 0; */
        margin: auto;
        overflow: hidden;
        /* box-shadow: 0 0 15px #888; */
    }

    .sponsors #slider-scroller {
        position: absolute;
        top: 0;
        left: 0;
        width: calc(260px * 6);
        transition: all 1s ease;
    }

    .sponsors .slider-item {
        width: 220px;
        height: 110px;
        display: inline-block;
        margin: 20px;
        position: relative;
    }

    .sponsors .slider-item img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 200px;
        max-height: 100px;
    }

    button.read-btn {
        background: #f4a950;
        cursor: pointer;
        line-height: 1.33333em;
        border-radius: 0.555556em;
        padding: 13px;
        width: 8em;
        color: rgb(255, 255, 255);
        text-align: center;
        border: none;
    }

    .readmore-button.container-fluid {
        text-align: center;
        /* margin: 58px 0px 0px 0px; */
    }

    /* multi-carousal */
    #slider-section {
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: black;
    }

    .container {
        width: 1600px;
        margin: auto;
    }

    .subcontainer {
        width: 85%;
        margin: auto;
    }

    .slider-wrapper {
        position: relative;
    }

    .previous,
    .next {
        padding: 2px;
        width: 30px;
        cursor: pointer;
        border-radius: 50%;
        outline: none;
        transition: 0.7s ease-in-out;
        border: 3px solid white;
        background-color: #1a1a1a;
        box-shadow: 0 0 5px #bbb;
        position: absolute;
        top: 50%;
    }

    #controls i {
        color: white;
        font-size: 1rem;
    }

    .tns-nav {
        text-align: right;
    }

    .tns-nav button {
        border: none;
        padding: 8px;
        border-radius: 50%;
        background-color: white;
        margin-left: 15px;
    }

    .tns-nav .tns-nav-active {
        background-color: gray;
    }

    /* DYNAMIC HTML */
    .container {
        position: relative;
        margin-top: 3%;
    }

    h1 {
        text-align: center;
        padding-bottom: 15px;
        font-family: Montserrat;
    }

    .tns-nav {
        display: none;
    }

    .tns-nav button {
        height: 13px;
        width: 8px;
        background-color: #a5a5a5;
        border: none;
        margin-left: 7px;
        border-radius: 50%;
    }

    .tns-nav .tns-nav-active {
        background-color: black;
    }

    .link {
        position: fixed;
        background-color: #d12322;
        padding: 23px 40px;
        right: 0;
        border-radius: 5px;
        top: 0;
        font-size: 18px;
        font-weight: 500;
        color: #fff;
        text-decoration: none;
        text-transform: capitalize;
        transition: all 0.1s ease-in-out;
    }

    .link i {
        padding-left: 7px;
    }

    .link:hover {
        text-decoration: underline;
        background-color: black;
    }

    .tns-controls {
        display: none;
    }

    #tns1>.tns-item {
        width: calc(6.25%) !important;
        height: 400px;
        padding-right: 0px !important;
    }

    .my-slider p {
        opacity: 0;
        position: absolute;
        width: 315px;
        height: 325px;
        text-align: center;
        padding: 90px 20px;
        color: #fff;
    }

    .my-slider span {
        opacity: 0;
        position: absolute;
        width: 302px;
        text-align: center;
        padding: 0px 20px;
        margin-top: 250px;
        color: #fff;
    }

    .my-slider .slider-img-1:hover p,
    .my-slider .slider-img-2:hover p,
    .my-slider .slider-img-3:hover p,
    .my-slider .slider-img-4:hover p,
    .my-slider .slider-img-5:hover p,
    .my-slider .slider-img-6:hover p,
    .my-slider .slider-img-7:hover p,
    .my-slider .slider-img-8:hover p {
        opacity: 1;
        box-shadow: 0 0 0 230px rgba(0, 0, 0, .8) inset;
        cursor: pointer;
    }

    .my-slider .slider-img-1:hover span,
    .my-slider .slider-img-2:hover span,
    .my-slider .slider-img-3:hover span,
    .my-slider .slider-img-4:hover span,
    .my-slider .slider-img-5:hover span,
    .my-slider .slider-img-6:hover span,
    .my-slider .slider-img-7:hover span,
    .my-slider .slider-img-8:hover span {
        opacity: 1;
        /* box-shadow: 0 0 0 230px rgba(0, 0, 0, .8) inset; */
        cursor: pointer;
    }

    p.multi-slider-description a img {
        margin-top: 75px;
    }

    .scrollspy {
        position: relative;
        height: 250px;
        overflow: auto;
        color: #fff;
    }

    .scrollspy p {
        margin-bottom: 120px;
        margin-top: 20px;
    }

    .list-group-item {
        padding: 0px !important;
        border: none !important;
        opacity: 0;
    }

    .list-group-item+.list-group-item.active {
        margin-top: 0px !important;
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        opacity: 1;
        /* margin-top: 30px; */
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: transparent !important;
        border-color: transparent !important;
    }

    .scroll-image {
        width: 304px;
        margin-left: 180px;
        position: absolute;
    }

    .scroll-second-image {
        opacity: 0;
        position: absolute;
        /* margin-left: 196px; */
        margin-top: 15px;
        border-radius: 20px;
    }

    .list-group-item.active .scroll-second-image {
        opacity: 1;
    }

    .bg.homes.roofs,
    .bg.commercial.commercial-infra,
    .bg.apartments,
    .container.rental-area-spec,
    .bg.interior {
        display: block;
    }

    .card-home,
    .card-commercial,
    .card-apartments,
    .card-rental,
    .card-interior {
        display: none;
    }

    @media (max-width: 1000px) {
        img.d-block.img-fluid.banner-image {
            width: 100% !important;
            height: 400px;
        }

        .banner-row {
            display: block !important;
        }

        @media (min-width: 90em) {
            #tns1 {
                width: calc(394.333%) !important;
            }
        }

        @media(max-width:767px) {
            .card-image {
                width: 100%;
                height: 170px !important;
            }

            img.d-block.img-fluid.banner-image {
                width: 100%;
            }

            .sponsors {
                background: #fafbfb;
                padding: 32px 20px 100px;
            }

            #tns1>.tns-item {
                width: calc(6.25%) !important;
                height: auto !important;
                padding-right: 0px !important;
            }

            .sharing-moment {
                background: #fff;
                padding: 32px 20px 32px;
                text-align: center;
            }

            .we-make {
                background: #161c25;
                height: 1200px;
            }

            .col-md-7,
            .col-md-6 {
                padding-right: 15px !important;
                padding-left: 0 !important;
            }

            .desc {
                font-size: 20px;
                color: #4E5253;
                text-align: -webkit-center;
                margin-top: 50px;
            }

            .scrollspy {
                text-align: center;
            }

            .we-make-title {
                font-size: 39px;
                font-weight: bold;
                color: #fff;
                text-align: center;
                line-height: 46px;
                padding: 50px 5px 20px 5px;
            }

            .all-have-row.d-flex {
                display: block !important;
            }

            .bg.homes.roofs,
            .bg.commercial.commercial-infra,
            .bg.apartments,
            .container.rental-area-spec,
            .bg.interior {
                display: none;
            }

            .card-home,
            .card-commercial,
            .card-apartments,
            .card-rental,
            .card-interior {
                display: block;
            }

            .card-home,
            .card-commercial,
            .card-apartments,
            .card-rental,
            .card-interior {
                background: #fff;
                border: 1px solid #eee;
                box-shadow: 0 25px 50px rgb(21 31 48 / 5%);
                border-radius: 20px;
                padding: 32px 20px;
                position: relative;
                z-index: 1;
                margin: 60px 20px;
            }

            h3 {
                text-align: center;
                padding-bottom: 30px;
            }


            img.commicial-img {
                width: 183px;
                height: 142px;
                border-radius: 0.5em;
                z-index: 99;
                position: absolute;
                margin-top: 45px;
            }

            img.commercial-images,
            img.apartment-image,
            img.rental-img,
            img.interior-img {
                width: 137px;
                height: 224px;
                border-radius: 0.5em;
            }

            img.rental-images,
            img.interior-images {
                width: 137px;
                height: 110px;
                border-radius: 0.5em;
            }

            img.apartment-img {
                width: 183px;
                height: 142px;
                border-radius: 0.5em;
                z-index: 99;
                position: absolute;
                margin-top: 45px;
                margin-left: -65px;
            }

            form.search {
                display: none;
            }

            .commercial-row.d-flex,
            .rental-row.d-flex {
                display: block !important;
            }

            .container-fluid {
                width: 100% !important;
            }

            .navbar {
                padding: 0px !important;
                margin: 0px auto;
            }


            .navbar-nav {
                flex-direction: row;
                position: absolute;
                z-index: 10;
                margin-top: 84px;
            }

            ul.nav.navbar-nav.navbar-right {
                display: none;
            }

            .banner-row,
            .col-md-8 {
                padding: 0 !important;
            }

            .banner-row .col-md-4 {
                padding: 0 !important;
                margin-top: -23px;
            }

            h1.font-bold.banner-heading {
                line-height: 1.3em;
                font-size: 36px;
                width: 412px;
                font-weight: bold;
                color: #fff !important;
                padding: 50px 37px;
            }

            h1.font-bold.banner-heading p.sort-description {
                padding-top: 15px;
                color: #fff !important;
            }

            .mobile-form-input {
                border: none;
                padding-left: 20px;
                font-size: 20px;
            }

            .card.card-col-4 {
                margin-top: 70px;
            }

            .card {
                margin: 0px 20px 10px 20px;
            }

            .icons-row.container-fluid.d-flex {
                padding: 30px 0px;
            }

            .city,
            .project,
            .beds {
                background: rgb(255, 255, 255);
                border: 1px solid rgb(239, 239, 239);
                padding: 3.8em 0em 1em 1.2em;
            }

            form.mobile-form {
                display: block;
                z-index: 10;
                margin: -25px 20px 0px 20px;
                left: 0px;
                right: 0px;
                color: rgb(153, 153, 153);
                position: absolute;
                background: rgb(255, 255, 255);
                z-index: 3;
                border: 1px solid rgb(232, 232, 232);
                box-shadow: rgb(0 0 0 / 10%) 0px 0.95em 3.8em;
                border-radius: 0.9em;
                padding: 13px;
            }

            .fa-search {
                font-size: 24px;
            }

            h2.homes-title.font-bold,
            h2.homes-title.font-bold span,
            .sharing-moment-title,
            .spot-light-title {
                font-size: 30px;
                text-align: center;
                padding-top: 30px;
            }
</style>

<body>
    @section('content')
        <div class="container-fluid">
            <div class="row banner-row">
                <div class="col-md-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row carousal-row">
                                    <div class="col-md-4">
                                        <h1 class="font-bold banner-heading"><span>Turn Your
                                            </span><span style="color:#f4a950"> Dream</span><span> Home
                                                into a Real</span><span>
                                                One!</span>
                                            <p class="sort-description"
                                                style="width:300px;font-size: 20px;color: #232728;font-weight: 500;">
                                                We Make Your Home Beautiful!</p>
                                        </h1>
                                        <br>

                                    </div>
                                    <div class="col-md-8  part-bannerimg">
                                        <img class="d-block img-fluid banner-image mobile-banner-image"
                                            src=" {{ URL('images/banner-image-2-01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row carousal-row">
                                    <div class="col-md-4">
                                        <h1 class="font-bold banner-heading"><span>Don't Quit We Make</span><span
                                                style="color:#f4a950"> Your Day Dream Come True!</span>
                                            <p class="sort-description"
                                                style="width: 350px;font-size: 20px;color: #232728;font-weight: 500;">
                                                You Dream, We Design!
                                            </p>
                                        </h1>

                                    </div>
                                    <div class="col-md-8 part-bannerimg">
                                        <img class="d-block img-fluid banner-image"
                                            src=" {{ URL('images/banner-image-01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <form class="search" role="search">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                style="width:250px;text-align: start;color: #232728;font-weight: 600;font-size: 16px;">
                                                Shortlist your property<p class="living-place"> select a plot</p>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a style="color: rgb(78, 82, 83);" class="dropdown-item"
                                                    href="#">Action</a>
                                                <a style="color: rgb(78, 82, 83);" class="dropdown-item"
                                                    href="#">Another action</a>
                                                <a style="color: rgb(78, 82, 83);" class="dropdown-item"
                                                    href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vl"></div>
                                    <label class="banner-form-label">Available Locations...
                                        <input type="hidden" id="txt-category">
                                        <input type="text" id="txt-search" class="form-control"
                                            placeholder="Enter Locations"></label>
                                    <span class="input-group-btn">
                                        <button id="btn-search" class="icon" type="submit" class="btn btn-default">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <form class="mobile-form">
                                <div class="mobile-forms">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input class="mobile-form-input" type="text" placeholder="Search for second home">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="card card-col-4">
                        <div class="card-body">
                            <span class="description">Hi-Tech building's for business and &amp; Standard Office Spaces.
                            </span>
                            <div class="card-text font-medium card-description">Commercial<br>
                                Space</div>
                            <div class="arrow-icon">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <img class="d-block img-fluid card-image" src=" {{ URL('images/card-image-1.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <span class="description">A fully-furnished Apartments and villa's, a better space for living.
                                <office class=""></office>
                            </span>
                            <div class="card-text font-medium card-description">Apartments<br>
                                Villas</div>
                            <div class="arrow-icon">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <img class="d-block img-fluid card-image" src=" {{ URL('images/card-image-2.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text font-medium card-description">Rentals</div>
                            <span class="description">Rent your dream home with customization options.</span>
                            <div class="arrow-icon">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <img class="d-block img-fluid card-image" src=" {{ URL('images/card-image-3.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cities-info project-info  full-width ">
            <div class="icons-row container-fluid d-flex">
                <div class="col-xl-4 ">
                    <div class="city">
                        <img style="width: 36px;height: 36px;" src="{{ url('images/tech park-01.svg') }}">
                        <span class="text-wrap"><span class="count font-medium">8+</span> <span
                                class="count-for fm lg:ml-2">Tech Parks</span></span>
                    </div>
                </div>
                <div class="col-xl-4 ">
                    <div class="project">
                        <img style="width: 36px;height: 36px;" src="{{ url('images/construction-01.svg') }}">
                        <span class="text-wrap"><span class="count font-medium">500+</span> <span
                                class="count-for fm lg:ml-2">Constructions</span></span>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="beds">
                        <img style="width: 36px;height: 36px;" src="{{ url('images/rental-01.svg') }}">
                        <span class="text-wrap"><span class="count font-medium"></span> <span
                                class="count-for fm lg:ml-2">Rental Policy</span></span>
                    </div>
                </div>
            </div>

            <div class="bg homes roofs">
                <h2 class="homes-title font-bold "><span class="text-animation">There is No</span> Better Place Than Home
                </h2>
                <p class="homes-sub-title font-book">
                    Helping you find your dream home,make a new beginning with Kalyani Homes. </p>
                <div class="container product-spec">
                    <div class="homes-row d-flex">
                        <div class="col-md-7 product-images d-flex">
                            <div class="col-md-6 roof-image">
                                <img style="border-radius:1em;" class=""
                                    src=" {{ URL('images/kalyanihomes-content-1.svg') }}" alt="">
                            </div>
                            <div class="col-md-6 roof-image">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-2.svg') }}" alt="">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-3.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-5 m-auto">
                            <h3 class="roof-title font-bold tittle">
                                <br><span class=" text-animation" style="font-size:36px;">Kalyani Homes</span>
                            </h3>
                            <p class="roof-desc desc">Kalyani Homes is the world's leading and developing business, Kalyani
                                Homes deliver the best designs and home interior's. Luxury 3 and 4 bedroom villa's that has
                                thick green gardern. Facilities such as Kids Playing area, Basketball Courts, are
                                available inside Kalyani Homes. Kalyani Homes has been most trusted and has gained
                                reputation all over the world!.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!---for mobile---->
            <div class="mobile-home">
                <div class="card-home">
                    <div class="card-body">
                        <h3>Kalyani Homes</h3>
                        <div class="col-md-7 product-images d-flex">
                            <div class="col-md-6 home-image">
                                <img style="border-radius:1em;" class=""
                                    src=" {{ URL('images/kalyanihomes-content-1.svg') }}" alt="">
                            </div>
                            <div class="col-md-6 roof-image">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-2.svg') }}" alt="">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-3.svg') }}" alt="">
                            </div>
                        </div>
                        <p class="roof-desc desc">Kalyani Homes is the world's leading and developing business, Kalyani
                            Homes deliver the best designs and home interior's. Luxury 3 and 4 bedroom villa's that has
                            thick green gardern. Facilities such as Kids Playing area, Basketball Courts, are
                            available inside Kalyani Homes. Kalyani Homes has been most trusted and has gained
                            reputation all over the world!.</p>
                    </div>
                </div>
            </div>

            <!---end mobile---->

            <div class="bg commercial commercial-infra">
                <div class="container commercial-spec">
                    <div class="commercial-row d-flex">
                        <div class="col-md-6 m-auto">
                            <h3 class="roof-title font-bold tittle">
                                <br><span class=" text-animation" style="font-size:36px;">Commercial Space</span>
                            </h3>
                            <p class="roof-desc desc" style="color:#fff;">Kalyani provides the best commercial space for
                                work .
                                8+ tech parks are available in Bangalore and Hyderbad. It has the best interior's and smart
                                workspace's. Kalyani Aura has the managed office space ready for many companies.
                                Office space are customized according to the clients ideas.</p>
                        </div>
                        <div class="col-md-6 commercial-images d-flex">
                            <div class="col-md-6 room-image">
                                <img style="border-radius:.5em; z-index:99;position: absolute;margin-top:85px;"
                                    class="commicial-img" src=" {{ URL('images/commercialspace1.png') }}"
                                    alt="">
                            </div>
                            <div class="col-md-6 room-image">
                                <img style="width:270px; height:440px;" class="wall-images"
                                    src=" {{ URL('images/commercialspace2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---for mobile---->
            <div class="mobile-home">
                <div class="card-commercial">
                    <div class="card-body">
                        <h3>Commercial Space</h3>
                        <div class="col-md-6 commercial-images d-flex">
                            <div class="col-md-7 product-images d-flex">
                                <div class="col-md-6 home-image">
                                    <img style="border-radius:1em;" class=""
                                        src=" {{ URL('images/kalyanihomes-content-1.svg') }}" alt="">
                                </div>
                                <div class="col-md-6 roof-image">
                                    <img style="border-radius:1em;" class="wall-images"
                                        src=" {{ URL('images/kalyanihomes-content-2.svg') }}" alt="">
                                    <img style="border-radius:1em;" class="wall-images"
                                        src=" {{ URL('images/kalyanihomes-content-3.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="roof-desc desc">Kalyani provides the best commercial space for work . 8+ tech parks are
                            available in Bangalore
                            and
                            Hyderbad. It has the best interior's and smart workspace's. Kalyani Aura has the managed office
                            space ready for many companies. Office space are customized according to the clients ideas. </p>
                    </div>
                </div>
            </div>

            <!---end mobile---->

            <div class="bg apartments">
                <div class="container apartments-list">
                    <div class="apartments-row d-flex">
                        <div class="col-md-7 product-images d-flex">
                            <div class="col-md-6 home-image">
                                <img style="border-radius:1em;" class=""
                                    src=" {{ URL('images/kalyanihomes-content-1.svg') }}" alt="">
                            </div>
                            <div class="col-md-6 roof-image">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-2.svg') }}" alt="">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-3.svg') }}" alt="">
                            </div>
                        </div>

                        <div class="col-md-5 m-auto">
                            <h3 class="chore-title font-bold tittle">
                                <br><span class=" text-animation" style="font-size:36px;">Apartments/Villa's</span>
                            </h3>
                            <p class="roof-desc desc">1BHK, 2BHK, 3BHK and 4BHK apartments and villa's are available at
                                Kalyani Homes.
                                Located near Nayandahalli metro station, Bangalore.
                                surrounded by scholls, college's, shopping centre, banks, hospitals.
                                Have your best experience with Kalyani Homes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!---for mobile---->
            <div class="mobile-home">
                <div class="card-apartments">
                    <div class="card-body">
                        <h3>Apartments/Villas</h3>
                        <div class="col-md-7 product-images d-flex">
                            <div class="col-md-6 home-image">
                                <img style="border-radius:1em;" class=""
                                    src=" {{ URL('images/kalyanihomes-content-1.svg') }}" alt="">
                            </div>
                            <div class="col-md-6 roof-image">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-2.svg') }}" alt="">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-3.svg') }}" alt="">
                            </div>
                        </div>

                        <p class="roof-desc desc">1BHK, 2BHK, 3BHK and 4BHK apartments and villa's are available at Kalyani
                            Homes. Located
                            near Nayandahalli metro station, Bangalore. surrounded by scholls, college's, shopping centre,
                            banks, hospitals. Have your best experience with Kalyani Homes.</p>
                    </div>
                </div>
            </div>

            <!---end mobile---->


            <div class="bg rental">
                <div class="container rental-area-spec">
                    <div class="rental-row d-flex">
                        <div class="col-md-5 m-auto">
                            <h3 class="area-title font-bold tittle">
                                <br><span class=" text-animation" style="font-size:36px;">Rental</span>
                            </h3>
                            <p class="area-desc desc" style="color:#fff;">Kalyani Homes provides you the best rental
                                options.
                                Kalyani Homes contains almost 500+ Villa's and Apartments or rent.
                                Special offer's for lease are provided to customers. Rent your dream home home with Kalyani
                                Homes.</p>
                        </div>
                        <div class="col-md-7 area-images d-flex">
                            <div class="col-md-6 area-image">
                                <img style="width:270px; height:210px;border-radius:.5em;" class="wall-images"
                                    src=" {{ URL('images/Rent-1.png') }}" alt="">
                                <img style="width:270px; height:210px;border-radius:.5em;" class="wall-images"
                                    src=" {{ URL('images/Rent-3.png') }}" alt="">
                            </div>
                            <div class="col-md-6 area-image">
                                <img style="width:270px; height:440px;border-radius:.5em;" class=""
                                    src=" {{ URL('images/Rent-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---for mobile---->
            <div class="mobile-home">
                <div class="card-rental">
                    <div class="card-body">
                        <h3>Rental</h3>
                        <div class="col-md-7 product-images d-flex">
                            <div class="col-md-6 home-image">
                                <img style="border-radius:1em;" class=""
                                    src=" {{ URL('images/kalyanihomes-content-1.svg') }}" alt="">
                            </div>
                            <div class="col-md-6 roof-image">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-2.svg') }}" alt="">
                                <img style="border-radius:1em;" class="wall-images"
                                    src=" {{ URL('images/kalyanihomes-content-3.svg') }}" alt="">
                            </div>
                        </div>

                        <p class="roof-desc desc">Kalyani Homes provides you the best rental
                            options.
                            Kalyani Homes contains almost 500+ Villa's and Apartments or rent.
                            Special offer's for lease are provided to customers. Rent your dream home home with Kalyani
                            Homes.</p>
                    </div>
                </div>
            </div>

            <!---end mobile---->

            <div class="bg interior">
                <div class="container hotel-foods">
                    <div class="interior-row d-flex">
                        <div class="col-md-7 interior-images d-flex">
                            <div class="col-md-6 interior-image">
                                <img style="width:270px; height:440px;" class=""
                                    src=" {{ URL('images/Interior-1.png') }}" alt="">
                            </div>
                            <div class="col-md-6 interior-image">
                                <img style="width:270px; height:210px;" class="wall-images"
                                    src=" {{ URL('images/Interior-3.png') }}" alt="">
                                <img style="width:270px; height:210px;" class="wall-images"
                                    src=" {{ URL('images/Interior-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-5 m-auto">
                            <h3 class="interior-title font-bold tittle"> <br><span class=" text-animation"
                                    style="font-size:36px;">About Interior's</span>
                            </h3>
                            <p class="interior-desc desc">Get your dream interior's done with kalyani Homes.
                                We provide you the best interior's .
                                Tell your dream design to our design team, they design the best for you. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---for mobile---->
        <div class="mobile-home">
            <div class="card-interior">
                <div class="card-body">
                    <h3>About Interior's</h3>
                    <div class="col-md-7 product-images d-flex">
                        <div class="col-md-6 home-image">
                            <img style="border-radius:1em;" class=""
                                src=" {{ URL('images/kalyanihomes-content-1.svg') }}" alt="">
                        </div>
                        <div class="col-md-6 roof-image">
                            <img style="border-radius:1em;" class="wall-images"
                                src=" {{ URL('images/kalyanihomes-content-2.svg') }}" alt="">
                            <img style="border-radius:1em;" class="wall-images"
                                src=" {{ URL('images/kalyanihomes-content-3.svg') }}" alt="">
                        </div>
                    </div>

                    <p class="roof-desc desc">Get your dream interior's done with kalyani Homes.
                        We provide you the best interior's .
                        Tell your dream design to our design team, they design the best for you.</p>
                </div>
            </div>
        </div>

        <!---end mobile---->

        <div class="we-make">
            <div class="container-fluid">
                <div class="all-have-row d-flex">
                    <div class="col-md-6">
                        <div class="we-make-title bold">We make it<span class="teal bold"> <br>simpler for you</span>
                        </div>
                        <div data-spy="scroll" data-target="#list-scrollspy" data-offset="0" class="scrollspy">
                            <h4 class="sub-title bold opacity-0" id="list-item-1">Finding or Renting a property?</h4>
                            <hr style="width: 8%;margin: 0;border-top: 3px solid #161c25;" />
                            <p>Pay rent or select a property we have made it easy for you have
                                us at the edge of your fingers on your mobile.</p>
                            <h4 id="list-item-2">Design the way you want!</h4>
                            <hr style="width: 8%;margin: 0;border-top: 3px solid #161c25;" />
                            <p>Design your home the way your heart's desire, select and customise your home in
                                just one touch with the help of our mobile app.
                            </p>
                            <h4 id="list-item-3">Give us your feedback!</h4>
                            <hr style="width: 8%;margin: 0;border-top: 3px solid #161c25;" />
                            <p>Be a part of every movement and every step we take, give us your feedback and
                                support us to make it the best for you.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div id="list-scrollspy" class="list-group">
                            <a class="list-group-item list-group-item-action" href="#list-item-1">
                                {{-- <img class="d-block img-fluid scroll-image" src=" {{ URL('images\mobile-base.webp') }}"
                                    alt="">
                                <img class="d-block img-fluid scroll-image-food scroll-second-image"
                                    src=" {{ URL('images\food.webp') }}" alt=""> --}}
                                <img class="d-block img-fluid scroll-image-food scroll-second-image"
                                    src=" {{ URL('images\Mobileappdesign-01.png') }}" alt="">
                            </a>
                            <a class="list-group-item list-group-item-action" href="#list-item-2">
                                {{-- <img class="d-block img-fluid scroll-image active-scroll-image"
                                    src=" {{ URL('images\mobile-base.webp') }}" alt="">
                                <img class="d-block img-fluid scroll-image-payment scroll-second-image"
                                    src=" {{ URL('images\down-payment.webp') }}" alt=""> --}}
                                <img class="d-block img-fluid scroll-image-food scroll-second-image"
                                    src=" {{ URL('images\Mobileappdesign-02.png') }}" alt="">
                            </a>
                            <a class="list-group-item list-group-item-action" href="#list-item-3">
                                {{-- <img class="d-block img-fluid scroll-image active-scroll-image"
                                    src=" {{ URL('images\mobile-base.webp') }}" alt="">
                                <img class="d-block img-fluid scroll-image-service scroll-second-image"
                                    src=" {{ URL('images\services.webp') }}" alt=""> --}}
                                <img class="d-block img-fluid scroll-image-food scroll-second-image"
                                    src=" {{ URL('images\Mobileappdesign-03.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="container-fluid never-sharing-moment">
            <div class="sharing-moment">
                <h2 class="sharing-moment-title font-bold"><span class="text-animation">Sharing the</span><br>best of us.
                </h2>
                <p class="sharing-moment-sub-title font-book">
                    Make your home coming a memorable one.</p>
            </div>
            <div class="multi-carousal">
                <div class="container-fluid">
                    <div class="my-slider">
                        <div class="slider-img-1">
                            <p class="multi-slider-description">Home isn't a place, it's a feeling.-Cecilia Ahern
                                homeinspiration,homegoals </p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-01.png') }}" alt="">
                        </div>
                        <div class="slider-img-2">
                            <p class="multi-slider-description">A house is made of wood and stone but only love can make a
                                home</p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-02.png') }}" alt="">
                        </div>
                        <div class="slider-img-3">
                            <p class="multi-slider-description">There is no safer place than home.homedesign homedecoration
                            </p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-03.png') }}" alt="">
                        </div>
                        <div class="slider-img-4">
                            <p class="multi-slider-description">Experience the best quality of living.Book your slots now!
                            </p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-04.png') }}" alt="">
                        </div>
                        <div class="slider-img-5">
                            <p class="multi-slider-description">Stay home because the best party begins at home.modernhome
                                homedecor homegoals</p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-05.png') }}" alt="">
                        </div>
                        <div class="slider-img-6">
                            <p class="multi-slider-description">A house of your own.moderndesign luxuryhome homedesign</p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-06.png') }}" alt="">
                        </div>
                        <div class="slider-img-7">
                            <p class="multi-slider-description">Interior designing is an art and Kalyani Homes is the
                                artist.interiordesign homedesign homeinterior</p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-07.png') }}" alt="">
                        </div>
                        <div class="slider-img-8">
                            <p class="multi-slider-description">You will be so desperate to work from home because we make
                                the best homes for you.</p>
                            <span>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/fb.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/linked-in.png') }}" alt="">
                                </a>
                                <a class="social-logo" href="#">
                                    <img src=" {{ URL('images/insta.png') }}" alt="">
                                </a>
                            </span>
                            <img src="{{ url('images/image-carousel-08.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" sponsors">
            <div class="spot-light container-fluid">
                <h2 class="spot-light-title font-bold "><span class="text-animation">Our best Sponsors</span></h2>
                <p class="spot-light-sub-title font-book">
                    Our work And Our sponsors count.</p>
            </div>
            <div id="slider-container">
                <div id="slider-scroller">
                    <div class="slider-item">
                        <img src=" {{ URL('images/accenture-logo.png') }}" alt="">
                    </div>
                    <div class="slider-item">
                        <img src=" {{ URL('images/ntt-Logo.png') }}" alt="">
                    </div>
                    <div class="slider-item">
                        <img src=" {{ URL('images/ObjectWin_Logo.png') }}" alt="">
                    </div>
                    <div class="slider-item">
                        <img src=" {{ URL('images/Oracle-logo.png') }}" alt="">
                    </div>
                    <div class="slider-item">
                        <img src=" {{ URL('images/Trianz-Logo.png') }}" alt="">
                    </div>
                    <div class="slider-item">
                        <img src=" {{ URL('images/vmware-logo.png') }}" alt="">
                    </div>
                    <div class="slider-item">
                        <img src=" {{ URL('images/ey-logo.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="readmore-button container-fluid">
                <a class="readmore-btn" href="#"><button type="submit" class="read-btn">Read
                        More</button></a>
            </div>
        @endsection

</body>
