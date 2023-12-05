@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
@php
function ubahChar($nilai){
    if( $nilai == 0) {
        return 'Tidak';
    } elseif ($nilai == 1) {
        return 'Ya';
    }
        else {
            return 'Tidak Valid';
        }
}
@endphp
	<h2>www.malasngoding.com</h2>
	<h3>Data Flashdisk</h3>
 
	<a href="/flashdisk/tambah3" class="btn btn-primary"> + Tambah Flashdisk</a>
	
	<br/>
	<p>Cari Data Flashdisk :</p>
	<form action="/flashdisk/cari2" method="GET">
		<input type="text" name="cari2" placeholder="Cari flashdisk .." value="{{ old("cari2", isset($cari2) ? $cari2 : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>
 
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Flashdisk</th>
			<th>Merk Flashdisk</th>
			<th>Stock Flashdisk</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($flashdisk as $p)
		<tr>
			<td>{{ $p->kodeflashdisk }}</td>
			<td>{{ $p->merkflashdisk }}</td>
			<td>{{ $p->stockflashdisk }}</td>
            <td>{{ubahChar( $p->tersedia )}}</td>
			<td>
				<a href="/flashdisk/view2/{{ $p->kodeflashdisk }}" class="btn btn-success">View</a>
				|
				<a href="/flashdisk/edit2/{{ $p->kodeflashdisk }}" class="btn btn-warning">Edit</a>
				|
				<a href="/flashdisk/hapus/{{ $p->kodeflashdisk }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $flashdisk->links() }}
@endsection