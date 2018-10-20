<?php

namespace App\Http\Controllers\Backend;

use App\Juri;
use App\Kategori;
use App\Penilaian;
use App\Politeknik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenjurianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $view = view('backend.penjurian');
        $view->list_penilaian = Penilaian::joinTim()->joinKategori()->joinPoliteknik()->search($request)->orderBy('penilaians.total', 'DESC')->get();
        $view->list_kategori = Kategori::all();
        $view->list_politeknik = Politeknik::all();
        $view->list_juri = Juri::all();
        return $view;
    }
}
