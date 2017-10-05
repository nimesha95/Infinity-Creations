@extends('layouts.master_without_container')

@section('title')
    Shopping Cart
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="carousel   fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

        <div class="overlay"></div>

        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item slides">
                <div class="slide-1">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1507224432/linksandfreeresources_whiky8.jpg"
                         class="img-responsive hidden-xs"
                         alt="saleme.lk">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/c_scale,h_320,w_640/v1507224432/linksandfreeresources_whiky8.jpg"
                         class="img-responsive visible-xs"
                         alt="saleme.lk">
                </div>
                <div class="hero">
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1507224397/33.jpg2__mmkwsk.jpg"
                         class="img-responsive hidden-xs"
                         alt="saleme.lk">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/c_scale,h_320,w_640/v1507224397/33.jpg2__mmkwsk.jpg"
                         class="img-responsive visible-xs"
                         alt="saleme.lk">
                </div>
                <div class="hero">
                </div>
            </div>
            <div class="item slides active">
                <div class="slide-3">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1507224379/Banner-2_1_j4vcr3.jpg"
                         class="img-responsive hidden-xs"
                         alt="saleme.lk">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/c_scale,h_320,w_640/v1507224379/Banner-2_1_j4vcr3.jpg"
                         class="img-responsive visible-xs"
                         alt="saleme.lk">
                </div>
                <div class="hero">
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <h3>What Works</h3>
        <ul>
            <li>This index page</li>
            <li>Just something page</li>
            <li>Ready-made mugs link in Products dropdown</li>
            <li>User Login</li>
            <li>Shopping cart</li>
            <li>item add remove functionality</li>
            <li>Link protection -- session managment</li>
        </ul>
        <br><br>
        <p>Platform: Laravel</p>
        <br>
        <p>Gets the data from the database and populate the mugs page</p>
        <br>
        <p><b>What's left:</b>
        <ul>
            <li>A FRONT PAGE</li>
            <li>etc etc</li>
        </ul>
        </p>
    </div>
@endsection
