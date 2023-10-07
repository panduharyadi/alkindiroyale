@extends('Layout.adminLayout')

@section('title', 'Add Product / Rooms')

@section('content')
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Add Rooms</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <form class="user" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_kamar" name="nama_kamar" placeholder="Nomor Kamar">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga Kamar">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="deskripsi" name="deskripsi" placeholder="Deskripsi Kamar">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="image" name="image" placeholder="Gambar Kamar">
                    </div>
                    <div class="form-group">
                        <select name="lokasi" id="lokasi">
                            <option value="Kos Alkindi Royale 1">Kos Alkindi Royale 1</option>
                            <option value="Kos Alkindi Royale 2">Kos Alkindi Royale 2</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
