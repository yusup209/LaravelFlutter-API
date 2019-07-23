<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(){
    	return Siswa::all();
    }

    public function indexId($id){
    	return Siswa::find($id);
    }

    public function create(Request $request){
    	$siswa = new Siswa;
    	$siswa->nama = $request->nama;
    	$siswa->email = $request->email;
    	$siswa->alamat = $request->alamat;
    	$siswa->nohp = $request->nohp;
    	$siswa->save();

    	return "Berhasil menambah data!";	
    }

    public function update(Request $request,$id){
    	$nama = $request->nama;
    	$email = $request->email;
    	$alamat = $request->alamat;
    	$nohp = $request->nohp;

    	$siswa = Siswa::find($id);
    	$siswa->nama = $nama;
    	$siswa->email = $email;
    	$siswa->alamat = $alamat;
    	$siswa->nohp = $nohp;
    	$siswa->save();

    	return "Data berhasl diupdate";
    }

    public function delete($id){
    	$siswa = Siswa::find($id);
    	$siswa->delete();

    	return "Data berhasil dihapus!";
    }
}
