@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Keranjang Belanja</h3>
 
	<a href="/keranjangbelanja/tambah4" class="btn btn-success"> $BELI</a>
	
	<br/>
	
	<br/>
 
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ number_format($p->Harga, 0, ',', '.') }}</td>
            <td>
                @php
                   echo number_format(($p->Jumlah * $p->Harga), 0, ',', '.');
                @endphp
            </td>
            <td>
				<a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-warning">Batal</a>
            </td>
		</tr>
		@endforeach
	</table>
	{{ $keranjangbelanja->links() }}
@endsection