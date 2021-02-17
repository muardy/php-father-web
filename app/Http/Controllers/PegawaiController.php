<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
  public function ceger()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('c_ceger')->get();
		
 
    	// mengirim data pegawai ke view index
		
    	return view('ceger',['c_ceger' => $pegawai]);
 
    } 
	
	  public function alfad()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('c_alfad')->get();
 
    	// mengirim data pegawai ke view index
    	return view('alfad',['c_alfad' => $pegawai]);
 
    }
	

	public function tambah()
{
 
	// memanggil view tambah
	return view('/');
 
}

public function store(Request $request)
{
	// insert data ke table pegawai
	
	 $this->validate($request,[
           'nama' => 'required|min:4|max:100',
           'email' => ['required','regex:/(.*)@c4kurd|.com|.net|.id/i'],
           'phone' => 'required|numeric',
		   'subject' => 'required|min:5|max:50',
		   'pesan' => 'required|min:10'
        ]);
		
	DB::table('form')->insert([
		'nama' => $request->nama,
		'email' => $request->email,
		'phone' => $request->phone,
		'subject' => $request->subject,
		'pesan' => $request->pesan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/');
 
}




public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['pegawai' => $pegawai]);
 
}
	  public function formulir(){
 
    	return view('formulir');
 
}


public function update(Request $request)
{
	// update data pegawai
	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('pegawai_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}






}
?>