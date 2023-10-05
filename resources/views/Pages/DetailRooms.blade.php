@extends('Layout.layout')

@section('title', 'Detail kamar')

@section('content')
    <div class="row no-gutters">
        <div class="container">
            <div class="col-sm-6 col-md-8">
                <div class="card" style="width: 18rem;">
                    <img src="{{ url('storage/img/'. $product->image)  }}" width="100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1>detail rooms</h1>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">

            </div>
        </div>
    </div>
@endsection