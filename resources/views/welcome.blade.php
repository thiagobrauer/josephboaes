@extends('layouts.default')

    @section('page')
        Home
    @endsection

    @section('stylesheets')
        <link href="{{ asset('frontend/css/home/vendor.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('frontend/css/home/custom.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('frontend/css/home/responsive.css') }}" rel="stylesheet" type="text/css">
    @endsection

    @section('body')

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Joseph Boaes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Portfolio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Galleries+</a>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About+</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages+</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog+</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Purchase</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slide">
            <div>
                <h1 class="caption">Project</h1>
                <img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (1).jpg') }}" alt="">
            </div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (2).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (3).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (4).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (5).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (6).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (7).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (8).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (9).jpg') }}" alt=""></div>
            <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (10).jpg') }}" alt=""></div>
        </div>


        @section('scripts')
            <script type='text/javascript' src="{{ asset('frontend/js/home/vendor.js') }}"></script>
            <script type='text/javascript' src="{{ asset('frontend/js/home/custom.js') }}"></script>
        @endsection

    @endsection
