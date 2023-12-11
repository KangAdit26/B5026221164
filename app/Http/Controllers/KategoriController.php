<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index5()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
		$kategori = DB::table('kategori')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index5',['kategori' => $kategori]);

	}

	public function pilih(Request $request)
    {
      
        $selectedKategoriId = $request->input('kategori');

    
        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('confirmKategori', [
            'selectedKategoriId' => $selectedKategoriId,
        ]);
    }
   

}