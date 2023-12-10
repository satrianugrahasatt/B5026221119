<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IkanController extends Controller
{
    public function index()
	{
        $ikan = DB::table('ikan')
        ->orderBy('kodeikan','asc')
        ->get();

    	// mengirim data pegawai ke view index
		return view('ikan',['ikan' => $ikan]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('tambahikan');

	}

    public function store(Request $request)
{
    // Cek apakah data dengan 'namaikan' yang sama sudah ada dalam tabel 'ikan'
    $existingRecord = DB::table('ikan')->where('namaikan', $request->namaikan)->first();

    if ($existingRecord) {
        // Jika sudah ada, lakukan update pada kolom 'jumlahikan'
        DB::table('ikan')->where('namaikan', $request->namaikan)->update([
            'jumlahikan' => DB::raw('jumlahikan + ' . $request->jumlahikan),
            'tersedia' => $request->tersedia,
        ]);
    } else {
        // Jika belum ada, lakukan insert baru
        DB::table('ikan')->insert([
            'namaikan' => $request->namaikan,
            'jumlahikan' => $request->jumlahikan,
            'tersedia' => $request->tersedia,
        ]);
    }

    // Alihkan halaman ke halaman ikan
    return redirect('/ikan');
}


    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('ikan')->where('kodeikan',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/ikan');
	}

    public function update(Request $request)
	{
		// update data pegawai
		DB::table('ikan')->where('kodeikan',$request->id)->update([
			'namaikan' => $request->namaikan,
			'jumlahikan' => $request->jumlahikan,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/ikan');
	}

    public function edit($kodeikan)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$ikan = DB::table('ikan')->where('kodeikan',$kodeikan)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editikan',['ikan' => $ikan]);
	}

    public function view($kodeikan)
    {
    //mengambil data pegawai dari database pegawai
      $ikan = DB::table('ikan')->where('kodeikan', $kodeikan)->get();

      //mengalihkan tampilan ke view dari pegawai
      return view('viewikan', ['ikan' => $ikan]);
    }
}
