@extends('Layout.layout')

@section('title', 'Promo Kamar')
<style>
    .tag {
        margin-top: 20px;
        text-align: center;
    }
</style>

@section('content')
    <div class="container" style="text-align: center;">
        <h1><b>Promo</b></h1>
        <h4 class="tag">Hidup Hemat Dengan Promo Alkindi</h4>

        {{-- search --}}
        

        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
            <div class="side-A">
                <div class="product-thumb">
                    <div class="image">
                        <a>
                            <img class="img-thumbnail w-50" src="../" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="side-B">
                <div class="product-desc-side">
                    <h3><a>Promoro</a></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, deleniti?</p>
                    <span><a href="">syarat&ketentuan.</a></span><br>
                    {{-- <div class="links">
                        <a href="">Detail?</a>
                    </div> --}}
                </div>
            </div>
        </div>



    </div>
@endsection