@extends('index')
@section('content')
    @foreach($categories as $category)
        <H1>{{$category->title}}</H1>
    @endforeach
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
</div>
    @endsection