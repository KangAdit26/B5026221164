@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Nilai Kuliah</h3>
 
	<a href="/nilaikuliah/tambah2" class="btn btn-primary"> + Tambah Nilai Baru</a>
	
	<br/>
	
	<br/>
 
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            <td>
                @php
                    if( $p->NilaiAngka <=40) {
                        echo 'D';
                    } elseif ($p->NilaiAngka >= 41 && $p->NilaiAngka <= 60) {
                        echo 'C';
                    } elseif ($p->NilaiAngka >= 61 && $p->NilaiAngka <= 80) {
                        echo 'B'; 
                    } elseif ($p->NilaiAngka >= 81) {
                        echo 'A';
                    }
                @endphp
            </td>
            <td>
                @php
                    echo ($p->NilaiAngka * $p->SKS);
                @endphp
            </td>
		</tr>
		@endforeach
	</table>
	{{ $nilaikuliah->links() }}
@endsection