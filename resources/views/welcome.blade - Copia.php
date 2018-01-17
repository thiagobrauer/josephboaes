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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato<span class="sr-only"></span></a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog+</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>

        <div class="slide">
            <div class="img-wrapper">
                <img width="770" height="1200" style="width: 100%; display: inline-block;" class="img img-responsive" src="{{ asset('frontend/img/home/home-1.jpg') }}" alt="">
                <div class="caption-wrapper">
                    <a href="#">PROJECT RED </a>
                </div> 
            </div>
            <div class="img-wrapper">
                <img width="770" height="1200" style="width: 100%; display: inline-block;" class="img img-responsive" src="{{ asset('frontend/img/home/home-2.jpg') }}" alt="">
                <div class="caption-wrapper">
                    <a href="#">CONCERTS</a>
                </div> 
            </div>
            <div class="img-wrapper">
                <img width="770" height="1200" style="width: 100%; display: inline-block;" class="img img-responsive" src="{{ asset('frontend/img/home/home-3.jpg') }}" alt="">
                <div class="caption-wrapper">
                    <a href="#">FESTIVALS</a>
                </div> 
            </div>
            <div class="img-wrapper">
                <img width="770" height="1200" style="width: 100%; display: inline-block;" class="img img-responsive" src="{{ asset('frontend/img/home/home-4.jpg') }}" alt="">
                <div class="caption-wrapper">
                    <a href="#">DRIVE</a>
                </div> 
            </div>
            <div class="img-wrapper">
                <img width="770" height="1200" style="width: 100%; display: inline-block;" class="img img-responsive" src="{{ asset('frontend/img/home/home-5.jpg') }}" alt="">
                <div class="caption-wrapper">
                    <a href="#">MOVE</a>
                </div> 
            </div>
            <div class="img-wrapper">
                <img width="770" height="1200" style="width: 100%; display: inline-block;" class="img img-responsive" src="{{ asset('frontend/img/home/home-6.jpg') }}" alt="">
                <div class="caption-wrapper">
                    <a href="#">SWIM</a>
                </div> 
            </div>
            <div class="img-wrapper">
                <img width="770" height="1200" style="width: 100%; display: inline-block;" class="img img-responsive" src="{{ asset('frontend/img/home/home-7.jpg') }}" alt="">
                <div class="caption-wrapper">
                    <a href="#">BE 1ST</a>
                </div> 
            </div>

            

            <!-- <div>
                <h1 class="caption">Project</h1>
                <img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (1).jpg') }}" alt="">
            </div> -->
            <!-- <div><img style="" class="img img-responsive" src="{{ asset('frontend/img/drive (2).jpg') }}" alt=""></div> -->
            
        </div>

        @section('scripts')
            <script type='text/javascript' src="{{ asset('frontend/js/home/vendor.js') }}"></script>
            <script type='text/javascript' src="{{ asset('frontend/js/home/custom.js') }}"></script>
        @endsection

    @endsection
