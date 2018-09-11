<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
	public function __construct()
    {
         $this->middleware('auth:admin');
    }

	public function index() {
		// $data['ck'] = User::where('kategori','Cipta Inovasi')->count();
		// $data['tik'] = User::where('kategori','Bisnis TIK')->count();
		// $data['game'] = User::where('kategori','Game Development')->count();
		// $data['gov'] = User::where('kategori','E-Goverment')->count();
		// $data['iot'] = User::where('kategori','IoT')->count();
		// $data['animasi'] = User::where('kategori','Desain Animasi')->count();
		// $data['jaringan'] = User::where('kategori','Keamanan Jaringan')->count();
		// $data['hack'] = User::where('kategori','Hackathon')->count();
		return view('backend.pages.dashboard.index');
	}
}
