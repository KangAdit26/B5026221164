@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
@php
function ubahChar($nilai){
    if( $nilai == 0) {
        return 'Tidak Tersedia';
    } elseif ($nilai == 1) {
        return 'Tersedia';
    }
        else {
            return 'Tidak Valid';
        }
}
@endphp
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Flashdisk</h3>
    <a class="btn btn-primary" href="/flashdisk">Kembali</a>

    <br />
    <br />
<h1 style="text-align: center;">Data Flashdisk</h1>
   @foreach($flashdisk as $p)
    <form action="/flashdisk/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodeflashdisk }}"> <br/>
        <div class="form-group" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="card mb-8" style="max-width: 100%; padding: 20px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group" style="border: 1px solid #ccc; padding: 40%;">
                            <img src="..." class="" alt="..." style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table style="width: 100%;">
                            <tr>
                                <td style="padding-bottom: 10px ;"><label for="jabatan" class="col-xs-3 col-form-label mr-2">Kode Flashdisk :</label></td>
                                <td style="padding-bottom: 10px #ccc;><div class="form-control">{{ $p->kodeflashdisk }}</div></td>
                            </tr>

                            <tr>
                                <td style="padding-bottom: 10px ;"><label for="jabatan" class="col-xs-3 col-form-label mr-2">Merk Flashdisk :</label></td>
                                <td style="padding-bottom: 10px #ccc;><div class="form-control">{{ $p->merkflashdisk }}</div></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 10px;"><label for="umur" class="col-xs-3 col-form-label mr-2">Stock Flashdisk :</label></td>
                                <td style="padding-bottom: 10px #ccc;><div class="form-control">{{ $p->stockflashdisk }}</div></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 10px;"><label for="alamat" class="col-xs-3 col-form-label mr-2">Ketersediaan :</label></td>
                                <td style="padding-bottom: 10px #ccc;><div class="form-control">{{ ubahChar( $p->tersedia ) }}</div></td>
                            </tr>
                        </table>
                        <br>
                        <a href="/flashdisk" class="btn btn-success"> OK</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection