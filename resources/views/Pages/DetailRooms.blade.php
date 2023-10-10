@extends('Layout.layout')

@section('title', 'Detail kamar')

@section('content')
{{-- <section class="image-head-wrapper" style="background-image: url('{{ asset('assets/images/banner2.jpg') }}');">
    <div class="inner-wrapper">
        <h1>dinning</h1>
    </div>
</section> --}}
<div class="clearfix"></div>

<!--dinning-->
<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-8 col-xs-12">
                <h2 class="blog-title-head">{{ $product->nama_kamar }}</h2>
                <p class="user-info"><a>{{ $product->lokasi }}</a></p>
                <div class="blog-image-single margin-top-small">
                    <img src="{{ asset('assets/images/'. $product->image) }}" class="img-responsive">
                </div>
                <p class="blog-desc">{{ $product->deskripsi }}</p>
                <span>Rp. {{ $product->harga }}</span>
<br><br>
                <div class="clearfix"></div>
                <div class="single-bottom comment-form">
                    <a href="" type="submit" class="btn btn-primary" style="background-color: #fdbc02; border-color:#fdbc02; color: #4e2102;">Pilih Kamar</a>
                </div>
            </div>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <div class="blog-list">
                    <h4>Fasilitas</h4>
                    <ul>
                        <li><a><i class="fa fa-caret-right"> </i>Air Panas</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>TV</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Wifi</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Layanan Kamar</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Ruangan AC</a></li>
                    </ul>

                    <div class="clearfix"> </div>
                </div>
                {{-- <div class="blog-list">
                    <h4>  Archives List</h4>
                    <ul>
                        <li><a><i class="fa fa-caret-right"> </i>July (15)</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Oct (20)</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>November (8)</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>December (25)</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>August (9)</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>July (15)</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Mar (25)</a></li>
                    </ul>
                    ff4157
                </div> --}}
                {{-- <div class="blog-list1">
                    <h4>Popular Posts</h4>
                    <div class="blog-list-top">
                        <div class="blog-img">
                            <a><img class="img-responsive" src="images/Home/img1.jpg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                            <span class="link">
                                Sep 14, 2016
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="blog-list-top">
                        <div class="blog-img">
                            <a><img class="img-responsive" src="images/Home/img3.jpg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                            <span class="link">
                                Sep 14, 2016
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="blog-list-top">
                        <div class="blog-img">
                            <a><img class="img-responsive" src="images/Home/img4.jpg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                            <span class="link">
                                Sep 14, 2016
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="blog-list-top">
                        <div class="blog-img">
                            <a><img class="img-responsive" src="images/Home/img5.jpg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                            <span class="link">
                                Sep 14, 2016
                            </span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div> --}}
            </aside>
        </div>
    </div>
</section>

@endsection