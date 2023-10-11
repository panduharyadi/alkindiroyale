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
                    <div id="js-format-input"></div>
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


    {{-- <script>
        var formatHarga = document.getElementById('js-format-input');
        var hargaValue = '';

        function renderInput() {;
            var template = `<div class="form-group">
                <input type="hidden" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga Kamar" value="${+hargaValue}">
                <input type="text" name="harga_format" id="harga_format" class="form-control" placeholder="Masukkan Harga" value="${formatRupiah(hargaValue, 'Rp. ')}" autofocus />
            </div>`
                formatHarga.innerHTML = template;
                var harga = document.getElementById('harga');
                var hargaFormatted = document.getElementById('harga_format');
                hargaFormatted.addEventListener('keyup', function(e);
                {
                    hargaValue = this.value.replace('Rp. ', '');
                    renderInput();
                });
        }
                hargaFormatted.focus();
                posEnd(hargaFormatted);

                function formatRupiah(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split  = number_string.split(','),
                        sisa   = split[0].length % 3,
                        rupiah = split[0].substr(0, sisa),
                        ribuan = split[0].substr(sisa).match(/\d{3}/gi),

                    if( ribuan ) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }

                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                }

                function posEnd(end)
                {
                    var len = end.value.length;

                    if( end.setSelectionRange ) {
                        end.focus();
                        end.setSelectionRange(len, len);
                    } else if( end.createTextRange ) {
                        var t = end.createTextRange();
                        t.collapse(true);
                        t.moveEnd('character', len);
                        t.select();
                    }
                }

        renderInput();
    </script> --}}
    <script>
        var formatInput = document.getElementById('js-format-input')
    var hargaValue = ''

    function renderInput() {
        var template = `<div class="form-group">
    <input type="hidden" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" value="${+hargaValue}" />
    <input type="text" name="harga_format" id="harga_format" class="form-control" placeholder="Masukkan Harga" value="${formatRupiah(hargaValue, 'Rp. ')}" autofocus />
    </div>`
    formatInput.innerHTML = template
    var harga = document.getElementById('harga');
    var hargaFormatted = document.getElementById('harga_format');
    hargaFormatted.addEventListener('keyup', function(e)
    {
        hargaValue = this.value.replace('Rp. ', '')
        renderInput();
    });
    hargaFormatted.focus()
    PosEnd(hargaFormatted)
    }

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }        function PosEnd(end) {
                var len = end.value.length;
                
                // Mostly for Web Browsers
                if (end.setSelectionRange) {
                    end.focus();
                    end.setSelectionRange(len, len);
                } else if (end.createTextRange) {
                    var t = end.createTextRange();
                    t.collapse(true);
                    t.moveEnd('character', len);
                    t.moveStart('character', len);
                    t.select();
                }
            }

    renderInput();
    </script>
@endsection
