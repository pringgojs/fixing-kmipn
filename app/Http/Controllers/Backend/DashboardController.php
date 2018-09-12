<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public function __construct()
    {
         $this->middleware('auth:admin');
    }

	public function index() {
		$view = view('backend.pages.dashboard.index');
		$view->list_kategori = Kategori::all();
		return $view;
	}
}
