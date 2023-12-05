<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
		$nilaikuliah = DB::table('nilaikuliah')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index2',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah2()
	{

		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}	

}