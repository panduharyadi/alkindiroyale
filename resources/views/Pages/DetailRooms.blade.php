@extends('Layout.layout')

@section('title', 'Detail kamar')

@section('content')
<div class="container">
    <section class="image-head-wrapper" style="background-image: url('{{ url('storage/img/'. $product->image) }}'); width: 1150px; display: flex; align-items: center;">
        <div class="inner-wrapper">
            <h1>{{ $product->nama_kamar }}</h1>
        </div>
    </section>
    <div class="clearfix"></div>

    <!--gallery block--->
    <section class="gallery-block gallery-front">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/room1.png') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="{{ asset('assets/images/room1.png') }}" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>delux room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/room2.png') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="{{ asset('assets/images/kamar1.jpeg') }}" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>delux room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/room3.png') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="{{ asset('assets/images/kamar1.jpeg') }}" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>delux room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/room4.png') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="{{ asset('assets/images/kamar1.jpeg') }}" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>delux room</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--service block--->
<section class="service-block">
    <div class="bg-set-col">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/wifi.png') }}">
                        </div>
                        <h4><a>free wifi</a></h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/key.png ')}}">
                        </div>
                        <h4><a>room service</a></h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/car.png ')}}">
                        </div>
                        <h4><a>free parking</a></h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/user.png') }}">
                        </div>
                        <h4><a>customer support</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection