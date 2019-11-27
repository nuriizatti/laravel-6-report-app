<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataInstansiController extends Controller
{
    public function index()

    {
    	// mengambil data dari table users
    	$instansi = DB::table ('users' where (""))->get();

    	if ($instansi->leveluser="Instansi") { 
		return view('/admin/instansi',['instansi' => $instansi]);
		}

    	// mengirim data ke view index
    	
    
 
    }
}
