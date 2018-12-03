<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @extends('layouts.head')
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <figure class="card card-product">
                <div class="img-wrap"><img src="https://theroco.com/assets/2018/09/nokia-9-cancelled-this-year.jpg">
                </div>
                <figcaption class="info-wrap">
                    <h4 class="title">Another name of item</h4>
                    <p class="desc">Some small description goes here</p>
                    <div class="rating-wrap">
                        <div class="label-rating">132 reviews</div>
                        <div class="label-rating">154 orders</div>
                    </div> <!-- rating-wrap.// -->
                </figcaption>
                <div class="bottom-wrap">
                    <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                    <div class="price-wrap h5">
                        <span class="price-new">$1280</span>
                        <del class="price-old">$1980</del>
                    </div> <!-- price-wrap.// -->
                </div> <!-- bottom-wrap.// -->
            </figure>
        </div> <!-- col // -->
        <div class="col-md-4">
            <figure class="card card-product">
                <div class="img-wrap"><img src="https://i.macuser.ua/article/1079.jpeg?_=1536936077"></div>
                <figcaption class="info-wrap">
                    <h4 class="title">Good product</h4>
                    <p class="desc">Some small description goes here</p>
                    <div class="rating-wrap">
                        <div class="label-rating">132 reviews</div>
                        <div class="label-rating">154 orders</div>
                    </div> <!-- rating-wrap.// -->
                </figcaption>
                <div class="bottom-wrap">
                    <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                    <div class="price-wrap h5">
                        <span class="price-new">$1280</span>
                        <del class="price-old">$1980</del>
                    </div> <!-- price-wrap.// -->
                </div> <!-- bottom-wrap.// -->
            </figure>
        </div> <!-- col // -->
        <div class="col-md-4">
            <figure class="card card-product">
                <div class="img-wrap"><img src="https://www.ixbt.com/img/x780/n1/news/2018/10/5/2_0_large.JPG"></div>
                <figcaption class="info-wrap">
                    <h4 class="title">Product name goes here</h4>
                    <p class="desc">Some small description goes here</p>
                    <div class="rating-wrap">
                        <div class="label-rating">132 reviews</div>
                        <div class="label-rating">154 orders</div>
                    </div> <!-- rating-wrap.// -->
                </figcaption>
                <div class="bottom-wrap">
                    <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                    <div class="price-wrap h5">
                        <span class="price-new">$1280</span>
                        <del class="price-old">$1980</del>
                    </div> <!-- price-wrap.// -->
                </div> <!-- bottom-wrap.// -->
            </figure>
        </div> <!-- col // -->
    </div> <!-- row.// -->
</div>
</body>
</html>
