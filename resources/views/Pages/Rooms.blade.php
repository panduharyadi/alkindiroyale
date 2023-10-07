@extends('Layout.layout')

@section('title', 'Pilihan Kamar')

@section('content')
    
    {{-- card product --}}
    <div class="container">
        @foreach ($product as $p)
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a>
                                <img class="img-thumbnail w-50" src="{{ url('assets/images/'. $p->image) }}"alt="{{ $p->nama_kamar }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a>{{ $p->nama_kamar }}</a></h3>
                        <p>{{ $p->deskripsi }}</p>
                        <span>Rp. {{ $p->harga }}</span><br>
                        <div class="links">
                            <a href="{{ route('product.show', $p->id) }}">Detail?</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="rooms-card" id="rooms-card">

    </div> --}}


    {{-- <script>
        const roomsCard = document.getElementById('rooms-card');
        const valueCard = [
            {
                gambar:     '../../public/assets/images/kamar1.jpeg',
                nama_kamar: 'kamar 1',
                deskripsi:  'kamar pertama',
                harga:      '2.500.000',
            }
        ]

        function returnCard(valueCard) {
            return `
            <div class="container">
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                    <a>
                                        <img class="img-thumbnail w-50" src="${gambar}"alt="${nama_kamar}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="side-B">
                            <div class="product-desc-side">
                                <h3><a>${nama_kamar}</a></h3>
                                <p>${deskripsi}</p>
                                <span>Rp. ${harga}</span>
                            </div>
                        </div>
                    </div>
            </div>`
        }

        roomsCard.innerHTML = returnCard(valueCard);
    </script> --}}
@endsection