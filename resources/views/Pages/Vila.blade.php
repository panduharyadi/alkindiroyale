@extends('Layout.layout')

@section('title', 'Vila')

@section('content')
<section hidden class="image-head-wrapper" style="background-image: url('images/banner2.jpg');">
    <div class="inner-wrapper">
        <h1>dinning</h1>
    </div>
</section>
<div class="clearfix"></div>

<!--dinning-->
<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="blog-image-single margin-top-small">
                    <img src="{{ asset('assets/images/vila/vila_a.jpeg') }}" class="img-responsive">
                </div>
                <div class="container">
                    <h1 style="color: #4e2102; text-align: ; margin-top: 10px;">Selamat Datang di Villa Kinditto</h1>
                    <p class="blog-desc">
                        Jika Anda mencari villa yang dekat dengan pantai, fasilitas ramah keluarga, dan suasana intim bersama teman-teman Anda?
                    <br><br>
                        Maka, rumah liburan kami bisa menjadi pilihan yang tepat

                        Villa Kinditto melayani Anda dengan pengalaman yang tidak akan terlupakan. Mulai dari pemandangan yang indah, suasana yang tenang, dan menenangkan jiwa Anda tentunya. Kinditto adalah tempat peristirahatan yang sempurna untuk istirahat dan relaksasi Anda dan mengekspresikan romansa pesona alam di Bali.

                        Baik Anda sedang berlibur bulan madu atau menghabiskan waktu bersama keluarga dan teman, Kinditto memiliki pesona unik yang memikat setiap tamu untuk menikmati momen bermakna dan intim bersama. Selain itu, layanan yang disuguhkan oleh staf Kinditto pasti membuat Anda merasa seperti di rumah sendiri
                    </p>
                </div>
            
                {{-- Vila B --}}
                <div class="blog-image-single margin-top-small">
                    <img src="{{ asset('assets/images/vila/vila_b.jpeg') }}" class="img-responsive">
                </div>

                {{-- Vila C --}}
                <div class="blog-image-single margin-top-small">
                    <img src="{{ asset('assets/images/vila/vila_c.jpeg') }}" class="img-responsive">
                </div>
<br><br>
                <h1 style="color: #4e2102; text-align: center; margin-bottom: 20px;">Fasilitas Vila Kinditto</h1>

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div class="image">
                                    <a class="arrow-left"><img src="{{ asset('assets/images/vila/kamar_vila.jpeg') }}" class="img-responsive" alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Kamar</a></h3>
                                <p class="blog-desc">Kinditto memiliki 3 kamar tidur yang asri dengan pemandangan laut, gunung, dan hutan. Kelengkapan semua kamar di Villa Kinditto memiliki TV LED, Wifi, AC, dan kamar mandi di setiap kamarnya.</p>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div class="image">
                                    <a class="arrow-left"><img src="{{ asset('assets/images/vila/kolem_renang.jpeg') }}" class="img-responsive" alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Kolam Renang</a></h3>
                                <p class="blog-desc">Kinditto memiliki 3 kamar tidur yang asri dengan pemandangan laut, gunung, dan hutan. Kelengkapan semua kamar di Villa Kinditto memiliki TV LED, Wifi, AC, dan kamar mandi di setiap kamarnya.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div class="image">
                                    <a class="arrow-left"><img src="{{ asset('assets/images/vila/dapur.jpg') }}" class="img-responsive" alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Dapur</a></h3>
                                <p class="blog-desc">Kinditto memiliki 3 kamar tidur yang asri dengan pemandangan laut, gunung, dan hutan. Kelengkapan semua kamar di Villa Kinditto memiliki TV LED, Wifi, AC, dan kamar mandi di setiap kamarnya.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div class="image">
                                    <a class="arrow-left"><img src="{{ asset('assets/images/vila/ruang_makan.jpeg') }}" class="img-responsive" alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Ruang Makan</a></h3>
                                <p class="blog-desc">Kinditto memiliki 3 kamar tidur yang asri dengan pemandangan laut, gunung, dan hutan. Kelengkapan semua kamar di Villa Kinditto memiliki TV LED, Wifi, AC, dan kamar mandi di setiap kamarnya.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div class="image">
                                    <a class="arrow-left"><img src="{{ asset('assets/images/vila/ruang_tamu.jpeg') }}" class="img-responsive" alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Ruang Tamu</a></h3>
                                <p class="blog-desc">Kinditto memiliki 3 kamar tidur yang asri dengan pemandangan laut, gunung, dan hutan. Kelengkapan semua kamar di Villa Kinditto memiliki TV LED, Wifi, AC, dan kamar mandi di setiap kamarnya.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-image-single margin-top-small">
                    <img src="{{ asset('assets/images/vila/vila_e.jpeg') }}" class="img-responsive">
                </div>

                <div class="container">
                    <p class="blog-desc">
                        Untuk menikmati itu semua, Anda hanya dikenakan harga 3.000.000 rupiah/ hari. Harga sudah mencakup seluruh area Villa dengan 3 kamar tidur dan sarapan untuk 6 orang. Bagi Anda memiliki anak dengan umur di bawah 10 tahun, bebas biaya menginap tentunya!
                    </p>
                </div>

                <div class="clearfix"></div>
            </div>
            <aside class="col-md-3 col-sm-4 col-xs-12">
                <div class="blog-list">
                    <h4>Fasilitas</h4>
                    <ul>
                        <li><a><i class="fa fa-caret-right"> </i>Kamar</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Kolam Renang</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Dapur</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Ruang Makan</a></li>
                        <li><a><i class="fa fa-caret-right"> </i>Ruang Tamu</a></li>
                    </ul>

                    <div class="clearfix"> </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection