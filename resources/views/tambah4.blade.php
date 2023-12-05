@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Belanjaan</h3>
 
	<a href="/keranjangbelanja" class="btn btn-primary"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Kode Barang :</label>
            <input type="number" name="KodeBarang" id="KodeBarang"  placeholder="Masukan Kode Barang">
        </div>
		
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Jumlah Barang :</label>
            <input type="number" name="Jumlah" id="Jumlah"  placeholder="Masukan Jumlah Barang">
        </div>
		
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Harga :</label>
            <input type="number" name="Harga" id="Harga"  placeholder="Masukan Harga Barang">
        </div>
		
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection