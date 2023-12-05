<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class FlashdiskController extends Controller
{
	public function index3()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
		$flashdisk = DB::table('flashdisk')
		->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index3',['flashdisk' => $flashdisk]);
 
	}
 
	// method untuk menampilkan view form tambah pegawai
	public function tambah3()
	{
 
		// memanggil view tambah
		return view('tambah3');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('flashdisk')->insert([
			'merkflashdisk' => $request->merkflashdisk,
			'stockflashdisk' => $request->stockflashdisk,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/flashdisk');
 
	}
 
	// method untuk edit data pegawai
	public function edit2($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$flashdisk = DB::table('flashdisk')->where('kodeflashdisk',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit2',['flashdisk' => $flashdisk]);
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('flashdisk')->where('kodeflashdisk',$request->id)->update([
			'merkflashdisk' => $request->merkflashdisk,
			'stockflashdisk' => $request->stockflashdisk,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/flashdisk');
	}
 
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('flashdisk')->where('kodeflashdisk',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/flashdisk');
	}
	public function cari2(Request $request)
	{
		// menangkap data pencarian
		$cari2 = $request->cari2;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$flashdisk = DB::table('flashdisk')
		->where('kodeflashdisk','like',"%".$cari2."%")
		->orderBy('kodeflashdisk', 'asc')
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index3',['flashdisk' => $flashdisk, 'cari2' => $cari2]);
 
	}
	public function view2($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$flashdisk = DB::table('flashdisk')->where('kodeflashdisk',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('view2',['flashdisk' => $flashdisk]);
 
	}
}
