<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMasyarakatController extends Controller
{
    public function index()

    {
    	// mengambil data dari table users
    	$masyarakat= DB::table ('users')->get();
    	
    	// mengirim data pegawai ke view index
    	return view('/admin/masyarakat',['masyarakat' => $masyarakat]);
    
 
    }
}
