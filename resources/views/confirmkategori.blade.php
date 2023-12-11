@extends('master')

@section('title', 'Konfirmasi Kategori')

@section('konten')
<div class="container mt-4">
    <div>
        Anda telah memilih Kategori dengan Kode: {{ $selectedKategoriId }}
    </div>
</div>
@endsection