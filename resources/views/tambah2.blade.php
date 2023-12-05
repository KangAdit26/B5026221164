@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Nilai</h3>
 
	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">NRP :</label>
            <input type="text" name="NRP" id="NRP"  placeholder="Masukan NRP Mahasiswa">
        </div>
		
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Nilai Angka :</label>
            <input type="number" name="NilaiAngka" id="NilaiAngka"  placeholder="Masukan Nilai Angka Mahasiswa">
        </div>
		
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">SKS</label>
            <input list="browsers" name="SKS" id="SKS" placeholder="Masukan SKS Mahasiswa">
  <datalist id="browsers">
    <option value="18">
    <option value="22">
    <option value="24">
  </datalist>
        </div>
		
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection