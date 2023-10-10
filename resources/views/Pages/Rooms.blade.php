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
                        <h4>{{ $p->lokasi }}</h4>
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

    <div class="container">
        <div class="matoa">

        </div>
    </div>


    <script>
        const valuesCards = [
            { 
            image: '../img/image1.png', 
            title: 'title 1', 
            content: 'super content 1',
            },
            {
            image: '../img/image2.png', 
            title: 'title 2', 
            content: 'super content 2'
            },
            { 
            image: '../img/image-3.png', 
            title: 'title3', 
            content: 'blablablablbalbalbabla blablaba'
            },
        ]
        valuesCards.map(card=> {
        var cardDiv = document.createElement('div');
        cardDiv.innerHTML = `
                        <div class="product-header">
                        <img src="${card.image}"/>
                        </div>
                        <div class="product-content">
                        <h4>${card.title}</h4>
                        <p>${card.content}</p>
                        </div> 
                        <button class="info-button">+ info</button>`
        document.getElementsByClassName('matoa')[0].appendChild(cardDiv);
        })
    </script>
@endsection