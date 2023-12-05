@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Flashdisk</h3>
 
	<a href="/flashdisk" class="btn btn-primary"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($flashdisk as $p)
	<form action="/flashdisk/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodeflashdisk }}"> <br/>
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Merk Flashdisk :</label>
            <input type="text" name="merkflashdisk" id="merkflashdisk" value="{{ $p->merkflashdisk }}" required="required">
        </div>
		
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Stock Flashdisk :</label>
            <input type="number" name="stockflashdisk" id="stockflashdisk" value="{{ $p->stockflashdisk }}" required="required">
        </div>
		
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Ketersediaan :</label>
            <input list="browsers" name="tersedia" id="tersedia" value="{{ $p->tersedia }}" required="required">
            <datalist id="browsers">
              <option value="0">
              <option value="1">
            </datalist>
                  </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
	@endsection