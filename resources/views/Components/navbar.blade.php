<header class="header-container">
    <div class="container">
        <div class="top-row">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div id="logo">
                        <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                        <a href="index.html"><span>Alkindi</span>Royale</a>
                    </div>                       
                </div>
                <div class="col-sm-6 visible-sm">
                    <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header page-scroll">
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                            <ul class="list-unstyled nav1 cl-effect-10">
                                <li><a data-hover="Beranda" href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><span>Beranda</span></a></li>
                                <li><a data-hover="Tentang Kami"  href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}"><span>Tentang Kami</span></a></li>
                                <li><a data-hover="Pilihan Kamar"  href="{{ route('rooms') }}" class="{{ request()->routeIs('rooms') ? 'active' : '' }}"><span>Pilihan Kamar</span></a></li>
                                <li><a data-hover="Kontak" href="#Contact"><span>Kontak</span></a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
                <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                    <div class="text-right"><a type="button" href="http://wa.me/6281230020063?text=Halo%20min,%20saya%20mau%20pesan%20kamar%20Alkindi%20Royale" class="btn book-now-btn">Pesan Sekarang</a></div>
                </div>
            </div>
        </div>
    </div>
</header>