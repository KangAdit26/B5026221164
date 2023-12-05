@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/flashdisk" class="btn btn-primary"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/flashdisk/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Merk Flashdisk :</label>
            <input type="text" name="merkflashdisk" id="merkflashdisk"  placeholder="Masukan Merk Flashdisk">
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Stock Flashdisk :</label>
            <input type="number" name="stockflashdisk" id="stockflashdisk"  placeholder="Masukan Stock Flashdisk">
        </div>
		
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Ketersediaan</label>
            <input list="browsers" name="tersedia" id="tersedia" placeholder="Masukan Stock flash disk">
  <datalist id="browsers">
    <option value="0">
    <option value="1">
  </datalist>
        </div>
		
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection