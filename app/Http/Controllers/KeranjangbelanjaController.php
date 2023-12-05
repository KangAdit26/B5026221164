<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangbelanjaController extends Controller
{
	public function index4()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
		$keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index4',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah4()
	{

		// memanggil view tambah
		return view('tambah4');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah ,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}	
    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

}