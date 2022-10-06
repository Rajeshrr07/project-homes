@extends('layouts.master')
@section('title', 'About-us')

<style>
    /* .about-us:before {
        content: "";
        background: linear-gradient(180.09deg, rgb(226, 242, 240) -12.16%, rgba(226, 242, 240, 0) 99.92%);
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 319px;
        pointer-events: none;
    } */
    .title-dynamic a,
    .title-dynamic span {
        color: #161c25;
        font-size: 14px;
    }

    .title-dynamic a:hover {
        color: #f4a950;
        text-decoration: none;
    }

    .about-us {
        padding: 0px 70px !important;
    }

    .page-title {
        margin: 4.1em 0em 1em 0em;
    }

    .page-title h1 {
        font-size: 56px;
        line-height: 64px;
        position: relative;
        color: #161c25;
        font-weight: bold;

    }

    .text-animation {
        color: #f4a950;
    }

    .nav-tabs {
        width: 65rem;
        margin: 0px auto;
        background-color: rgb(255, 255, 255);
        border: 0.4px solid rgb(232, 232, 232);
        box-shadow: rgb(0 0 0 / 10%) 0px 2px 10px;
        border-radius: 30px;
        background: rgb(255, 255, 255);
        padding: 10px 25px;
        width: 50%;
        margin: 0px auto 50px;
        max-width: 100%;
    }

    .nav-item {
        margin-left: 50px !important;
        margin-right: 30px;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        border-color: none !important;
    }

    .nav-tabs .nav-link {
        border: none !important;
    }

    .why-first-row,
    .why-second-row {
        padding-top: 7em;
    }

    .why-first-row-title {
        font-size: 36px;
    }

    .pattern-img {
        position: absolute;
        position: absolute;
        bottom: 22px;
        display: block;
        margin-left: -60px;
    }

    .find-us {
        top: 85px;
    }

    img.float-right.img-fluid.img-rounded {
        position: relative;
        z-index: 99;
        border-radius: 0.5em;
    }

    .card {
        flex-direction: row !important;
    }
</style>

<body>
    @section('content')
        <div class="about-us container-fluid">
            <div class="title-dynamic">
                <span class="dynamic font-weight-bold"><a href="{{ url('/') }}">Kalyanihomes </a> /<span class="title">
                        About-us</span></span>
            </div>
            <div class="why-first-section">
                <div class="page-title text-center">
                    <h1>About <span class="text-animation"> Us</span></h1>
                </div>
                <div class="aboutus-tabs py-4">
                    <div class="row">
                        <div class="col-md-12 ">
                            <ul id="tabs" class="nav nav-tabs justify-content-center ">
                                <li class="nav-item"><a href="" data-target="#why" data-toggle="tab"
                                        class="nav-link small text-uppercase">The Why</a></li>
                                <li class="nav-item"><a href="" data-target="#what" data-toggle="tab"
                                        class="nav-link small text-uppercase active">The What</a></li>
                                <li class="nav-item"><a href="" data-target="#how" data-toggle="tab"
                                        class="nav-link small text-uppercase">The How</a></li>
                            </ul>
                            <br>
                            <div id="tabsContent" class="tab-content">
                                <div id="why" class="tab-pane fade active show">
                                    <div class="row pb-2 why-first-row">
                                        <div class="col-md-6 find-us">
                                            <h1 class="font-weight-bold why-first-row-title">We didn't find it for us,
                                                <br><span class="text-animation bold block">so we created it for you</span>
                                            </h1>
                                            <p class="mt-3 ">That's essentially our story in one sentence.
                                                Crammed up hostels or cooped up PGs - not much of a choice, is it? That's
                                                why we created Stanza Living - a place designed by people who've been in
                                                your shoes. Understand you. And are inspired by you.</p>
                                        </div>
                                        <div class="col-md-6 find-us-images">
                                            <img style="width:600px;height:416px;"
                                                src="{{ url('images/about-us-image1.webp') }}"
                                                class="float-right img-fluid img-rounded">
                                            <img src="{{ url('images/about-us-pattern.png') }}"
                                                class="float-left img-fluid img-rounded pattern-img">
                                        </div>
                                        <div class="row pb-2 the-why why-second-row">
                                            <div class="col-md-6 ">
                                                <img style="width:600px;height:416px;"
                                                    src="{{ url('images/about-us-image2.webp') }}"
                                                    class="float-right img-fluid img-rounded">
                                            </div>
                                            <div class="col-md-6">
                                                <h1 class="font-bold">You needed a place like home, <span
                                                        class="text-keppel bold block">so we moved back home</span></h1>
                                                <p class="">That's essentially our story in one sentence.
                                                    Crammed up hostels or cooped up PGs - not much of a choice, is it?
                                                    That's
                                                    why we created Stanza Living - a place designed by people who've been in
                                                    your shoes. Understand you. And are inspired by you.</p>
                                            </div>
                                        </div>
                                        <div class="map-extention">
                                            <h1 class="font-bold">
                                                You moved to a new city,<span class="text-keppel block">so we moved there
                                                    too</span></h1>
                                            <p>Today, we've come a long way - from the two residences in Delhi to an
                                                impressive 450+ residences in more than 24+ cities across the country, and
                                                we promise we'll soon be ready to welcome you in many more.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="what" class="tab-pane fade ">
                                    <div class="list-group">
                                        <p>A place that feels like 'home' as soon as you enter it. A place where we steal
                                            away your chores and replace them with care. A place where you'll have
                                            technology in your pocket and your tribe by your side. A place that's all about
                                            you. And that is no wishful thinking, but our unwavering PACT with you.</p>
                                    </div>
                                </div>
                                <div id="how" class="tab-pane fade">
                                    <div class="list-group">
                                        <div class="card row the-how-row">
                                            <div class="col-md-5">
                                                <h1 class="font-bold">We designed the backdrop of <span
                                                        class="text-keppel bold">your life</span></h1>
                                                <p>The sofa in the lounge will make you see your bestie and you arguing
                                                    about whose day was more hectic. The bed in your room will give you a
                                                    picture of where you'll be scrolling through insta stories. The
                                                    microwave in the pantry will make you imagine slurping on a piping hot
                                                    bowl of noodles in the middle of the night. Simply put, you'll see a bit
                                                    of your life in every spot of the residence. And a place that does that
                                                    is home</p>
                                            </div>
                                            <div class="col-md-7">
                                                <img src="{{ url('images/how-image-1.webp') }}" </div>
                                            </div>
                                        </div>

                                        <div class="card row the-how-row">
                                            <div class="col-md-5">
                                                <h1 class="font-bold">It’s unique<span class="bold">your lifeIt’s our
                                                        signature style</span></h1>
                                            </div>
                                            <div class="col-md-7">
                                                <p>The buildings that become our residences come in different shapes and
                                                    sizes. And aren't we glad about that? That way, we can retain their
                                                    distinct architecture while infusing them with our design philosophy. So
                                                    that every Stanza Living residence stays unique and yet is uniquely
                                                    Stanza Living.</p>
                                            </div>
                                        </div>

                                        <div class="card row the-how-row">
                                            <div class="col-md-7">
                                                <img src="{{ url('images/how-image-1.webp') }}" </div>

                                            </div>
                                            <div class="col-md-5">
                                                <h1 class="font-bold">The inspiration behind it?<span
                                                        class="text-keppel bold">you</span></h1>
                                                <p>From something as apparent as the number of drawers in your wardrobe, to
                                                    something as neglected as the perfect illumination of the lights in the
                                                    corridors, every aspect of our residence design is detailed to add
                                                    comfort and convenience to your everyday life. That's the kind of
                                                    thought you deserve, and we put it into it</p>
                                            </div>
                                        </div>

                                        <div class="card row the-how-row">
                                            <div class="col-md-5">
                                                <p>A splash of teal here. A touch of yellow there. And many other happy
                                                    shades in between. Wherever you look, you'll see the balance of ageless
                                                    comfort with a 2020s vibe. The interiors here will put a smile on your
                                                    face, even when you come back home after a stressful day.</p>
                                            </div>
                                            <div class="col-md-7">
                                                <h1 class="font-bold">It reflects your colours.<span class="bold">Your
                                                        stories.
                                                    </span></h1>
                                            </div>
                                        </div>

                                        <div class="card row the-how-row">
                                            <div class="col-md-5">
                                                <h1 class="font-bold">There’s<span class="text-keppel bold">more
                                                        room</span>in your room</h1>
                                                <p>Good news! Your belongings will no longer wrestle for the same space.
                                                    They can happily coexist in your spacious, fully-furnished room. And
                                                    when you venture out of your room, the resting area, gaming and
                                                    entertainment zone and dining area will further add a lot of life to
                                                    your daily life.</p>
                                            </div>
                                            <div class="col-md-7">
                                                <img src="{{ url('images/how-image-3.webp') }}" </div>
                                            </div>
                                        </div>

                                        <div class="card row the-how-row">
                                            <div class="col-md-5">
                                                <h1 class="font-bold">Quality<span class="bold">that speaks for
                                                        itself</span></h1>
                                            </div>
                                            <div class="col-md-7">
                                                <p>Take it for granted that the lighting fixtures won't fail when you're
                                                    tiptoeing to the dining area for a midnight snack. And we test our
                                                    furniture for sturdiness, anticipating you slumping into it on certain
                                                    days. But don't just go by our assurance. See and experience it for
                                                    yourself before giving your nod of approval.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    @endsection
</body>
