@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

<div class="container mt-8">
    <div class="row">
        <div class="col-12">
            <div class="card">
            
                    <h1>Pilih Kategori</h1>
              
                <div class="card-body">
                    <form action="/kategori/pilih" method="POST">
                        @csrf <!-- Token CSRF untuk keamanan -->
                        <div class="form-group">
                            <select name="kategori" id="kategori" class="form-control">
                                @foreach($kategori as $p)
                                    <option value="{{ $p->ID }}">{{ $p->Nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning">KIRIM</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection