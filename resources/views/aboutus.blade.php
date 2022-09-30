@extends('layouts.master')
@section('title', 'About-us')

<body>
    @section('content')
        <div class="about-us">
            <div class="title-dynamic">
                <span><a href="{{ url('/') }}">Kalyanihomes</a>/About-us</span>
            </div>
            <div class="container">
                <div class="page-title">
                    <h1>About<span>Us</span></h1>
                </div>
                <div class="aboutus-tabs py-4">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="tabs" class="nav nav-tabs">
                                <li class="nav-item"><a href="" data-target="#why" data-toggle="tab"
                                        class="nav-link small text-uppercase">The Why</a></li>
                                <li class="nav-item"><a href="" data-target="#what" data-toggle="tab"
                                        class="nav-link small text-uppercase active">The What</a></li>
                                <li class="nav-item"><a href="" data-target="#how" data-toggle="tab"
                                        class="nav-link small text-uppercase">The How</a></li>
                            </ul>
                            <br>
                            <div id="tabsContent" class="tab-content">
                                <div id="why" class="tab-pane fade">
                                    <div class="row pb-2">
                                        <div class="col-md-7">
                                            <p>Tabs can be used to contain a variety of content &amp; elements. They are a
                                                good way to group <a href="" class="link">relevant content</a>.
                                                Display initial content in context to the user. Enable the user to flow
                                                through <a href="" class="link">more</a> information as needed.
                                            </p>
                                        </div>
                                        <div class="col-md-5"><img src="//dummyimage.com/1005x559.png/5fa2dd/ffffff"
                                                class="float-right img-fluid img-rounded"></div>
                                    </div>

                                </div>
                                <div id="what" class="tab-pane fade active show">
                                    <div class="list-group"><a href="" class="list-group-item d-inline-block"><span
                                                class="float-right badge badge-pill badge-dark">51</span> Home Link</a> <a
                                            href="" class="list-group-item d-inline-block"><span
                                                class="float-right badge badge-pill badge-dark">8</span> Link 2</a> <a
                                            href="" class="list-group-item d-inline-block"><span
                                                class="float-right badge badge-pill badge-dark">23</span> Link 3</a> <a
                                            href="" class="list-group-item d-inline-block text-muted">Link n..</a>
                                    </div>
                                </div>
                                <div id="how" class="tab-pane fade">
                                    <div class="list-group"><a href="" class="list-group-item d-inline-block"><span
                                                class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a
                                            href="" class="list-group-item d-inline-block"><span
                                                class="float-right badge badge-pill badge-dark">8</span> Message 2</a> <a
                                            href="" class="list-group-item d-inline-block"><span
                                                class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a
                                            href="" class="list-group-item d-inline-block text-muted">Message n..</a>
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
