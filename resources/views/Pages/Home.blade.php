@extends('Layout.layout')

@section('title', 'Home')

@section('content')


    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"> <img src="{{ asset('assets/images/banner.png') }}" style="width:100%; height: 500px"
                    alt="First slide">
                <div class="carousel-caption">
                    <h1>vacayhome<br> spa & Resort</h1>
                </div>
            </div>
            <div class="item"> <img src="{{ asset('assets/images/banner2.png') }}" style="width:100%; height: 500px"
                    alt="Second slide">
                <div class="carousel-caption">
                    <h1>vacayhome<br> spa & Resort</h1>
                </div>
            </div>
            <div class="item"> <img src="{{ asset('assets/images/banner3.png') }}" style="width:100%; height: 500px"
                    alt="Third slide">
                <div class="carousel-caption">
                    <h1>vacayhome<br> spa & Resort</h1>
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img
                src="{{ asset('assets/images/icons/left-arrow.png') }}"
                onmouseover="this.src = '{{ asset('assets/images/icons/left-arrow-hover.png') }}'"
                onmouseout="this.src = '{{ asset('assets/images/icons/left-arrow.png') }}'" alt="left"></a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img
                src="{{ asset('assets/images/icons/right-arrow.png') }}"
                onmouseover="this.src = '{{ asset('assets/images/icons/right-arrow-hover.png') }}'"
                onmouseout="this.src = '{{ asset('assets/images/icons/right-arrow.png') }}'" alt="left"></a>

    </div>
    <div class="clearfix"></div>

    <!--service block--->
    <section class="service-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/wifi.png') }}">
                        </div>
                        <h4><a>Gratis Wifi</a></h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/key.png') }}">
                        </div>
                        <h4><a>Layanan Kamar</a></h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/car.png') }}">
                        </div>
                        <h4><a>Area Parkir</a></h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                    <div class="service-details text-center">
                        <div class="service-image">
                            <img alt="image" class="img-responsive" src="{{ asset('assets/images/icons/user.png') }}">
                        </div>
                        <h4><a>Admin</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--gallery block--->
    <section class="gallery-block gallery-front">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/kamar1.jpeg') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive"
                                href="{{ asset('assets/images/kamar1.jpeg') }}" data-lightbox="example-1"><i
                                    class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>delux room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/kamar2.jpeg') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive"
                                href="{{ asset('assets/images/kamar2.jpeg') }}" data-lightbox="example-1"><i
                                    class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>super room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/kamar3.jpeg') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive"
                                href="{{ asset('assets/images/kamar3.jpeg') }}" data-lightbox="example-1"><i
                                    class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>single room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ asset('assets/images/kamar4.jpeg') }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive"
                                href="{{ asset('assets/images/kamar4.jpeg') }}" data-lightbox="example-1"><i
                                    class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>double room</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--offer block-->
    <section class="vacation-offer-block">
        <div class="vacation-offer-bgbanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="vacation-offer-details">
                            <h1>Alkindi Royale</h1>
                            <h3>"Kost Alkindi Royale, Hunian Impian Paling Royal"</h4> <br>
                                <h4>Alkindi Royale menghadirkan suasana hunian senyaman rumah sendiri. Memanjakan penghuni
                                    kost dengan berbagai macam fasilitas yang menunjang privasi, kenyamanan, dan praktis
                                    dalam belajar atau saat hybrid working</h5>
                                    <button type="button" class="btn btn-default">Pilih Kamar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End-->

    <!----resort-overview--->
    <section class="resort-overview-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img src="{{ asset('assets/images/resort/resort1.jpeg') }}" class="img-responsive"
                                        alt="image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Istirahat menjadi berkualitas</a></h3>
                            <p>Istirahat menjadi berkualitas dengan kasur pillow top yang empuknya bakal bikin tidur kamu
                                makin nyenyak</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img alt="image" class="img-responsive"
                                        src="{{ asset('assets/images/resort/resort2.jpeg') }}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Kamar Full Ac</a></h3>
                            <p>Full AC yang bikin sejuk setelah bertarung dengan riuhnya kemacetan saat pulang kerja</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>Lemari Baju</a></h3>
                            <p>Lemari baju yang lengkap untuk menyimpan pakaian kesayanganmu agar tetap rapih</p>

                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb">
                            <div class="image txt-rgt">
                                <a class="arrow-left"><img src="{{ asset('assets/images/resort/resort3.jpeg') }}"
                                        class="img-responsive" alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>Fokus Belajar</a></h3>
                            <p> Meja belajar agar fokus belajar atau saat bekerja hybrid working</p>

                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb txt-rgt">
                            <div class="image">
                                <a class="arrow-left"><img src="{{ asset('assets/images/resort/resort4.jpeg') }}"
                                        class="img-responsive" alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </section>

    <section class="resort-overview-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img src="{{ asset('assets/images/resort/resort5.jpeg') }}" class="img-responsive"
                                        alt="image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>santai dikosan</a></h3>
                            <p>Emang paling enak santai dikosan sambil nonton Netflix</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img alt="image" class="img-responsive"
                                        src="{{ asset('assets/images/resort/resort6.jpeg') }}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Dapur umum</a></h3>
                            <p>Dapur lengkap untuk memasak setiap hidangan makanan favoritmu. Ga takut boros jajan untuk
                                anak kosan</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>petugas keamanan</a></h3>
                            <p>Petugas keamanan yang berjaga-jaga 24 jam non-stop! Nggak bakal ada yang berani nyentuh
                                barang-barangmu pokoknya!</p>

                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb">
                            <div class="image txt-rgt">
                                <a class="arrow-left"><img src="" class="img-responsive" alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>area parkir</a></h3>
                            <p>Parkir mudah dengan nyaman dan bebas repot!</p>
                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb txt-rgt">
                            <div class="image">
                                <a class="arrow-left"><img src="" class="img-responsive" alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </section>

    <!-----blog slider----->
    <!--blog trainer block-->
    <section class="blog-block-slider mb-5">
        <div class="blog-block-slider-fix-image">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <!-- Wrapper for slides -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/client1.png') }}" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Walter Hucko</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/client2.png') }}" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Jules Boutin</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('assets/images/client3.png') }}" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Attilio Marzi</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <!---blog block--->
    {{-- <section class="blog-block">
    <div class="container">
        <div class="row offspace-45">
            <div class="view-set-block">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="event-blog-image">
                        <img alt="image" class="img-responsive" src="{{ asset('assets/images/blog1.png') }}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                    <div class="event-blog-details">
                        <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                        <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                        <a class="btn btn-default" href="single-blog.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row offspace-45">
            <div class="view-set-block">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="event-blog-image">
                        <img alt="image" class="img-responsive" src="{{ asset('assets/images/blog2.png') }}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                    <div class="event-blog-details">
                        <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                        <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                        <a class="btn btn-default" href="single-blog.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
