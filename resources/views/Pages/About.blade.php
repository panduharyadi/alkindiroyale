    @extends('Layout.layout')

    @section('title', "About us")

    @section('content')
        <section class="image-head-wrapper img-fluid" style="background-image: url({{ asset('assets/images/about3.jpg') }})">
            <div class="inner-wrapper">
                <h1>About us</h1>
            </div>
        </section>
        <div class="clearfix"></div>


        <section class="about-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 about-left">
                        <p>Alkindi <label>Royale</label></p>
                    </div>
                    <div class="col-md-7 about-right">
                        <h2>Kost Alkindi Royale, Hunian Impian Paling Royal</h2> <br>
                        <h4>Selamat datang di Kost Alkindi Royale Kost dengan desain modern yang memukau menciptakan pengalaman hunian yang takterlupakan</h4>
                            <br>
                        <p>
                            Emang boleh senyaman itu nge-kost di Alkindi Royale?

                            Harus banget dong!!

                            Alkindi Royale menghadirkan suasana hunian senyaman rumah sendiri. Memanjakan penghuni kost dengan berbagai macam fasilitas yang menunjang privasi, kenyamanan, dan praktis dalam belajar atau saat hybrid working.
                        </p>
                        <hr style="border-right: 2px solid #fdbc02;" />
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>

        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right" id="list-matoa">

            </div>
        </div>

<script>
    
    var rooms = [
        [
          "Tipe A",
          "Alkindi Matoa",
          "300",
          "fasilitas"
        ]
    ]

    var listRoom = document.getElementById('list-matoa')
    function printRooms(array) {
        var tampung = ""
        for( var i = 0; i < array.length; i++ ) {
            var loop =array[i]
            tampung += `
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a>
                                <img class="img-thumbnail w-50" src="{{ asset('assets/images/resort/resort1.jpeg') }}"alt="${loop[0]}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a>${loop[0]}</a></h3>
                        <p>${loop[3]}</p>
                        <span>${loop[2]}</span>
                    </div>
                </div>
            `
        }
        listRoom.innerHTML = tampung
    }
    printRooms(rooms)

</script>
@endsection