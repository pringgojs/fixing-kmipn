<?php

namespace App\Http\Controllers\Backend;

use App\Tim;
use App\Juri;
use App\Kategori;
use App\Penilaian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JuriController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:admin');
    }

    public function index()
    {
        $view = view('backend.pages.juri.index');
        $view->list_juri = Juri::all();

        return $view;
    }

    public function create()
    {
        $view = view('backend.pages.juri.create');
        $view->list_kategori = Kategori::all();
        return $view;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'asal_politeknik' => 'required',
            'username' => 'required',
            'password' => 'required',
            'kategori_id' => 'required',
        ]);

        $juri = new Juri;
        $juri->nama = $request->input('nama');
        $juri->asal_politeknik = $request->input('asal_politeknik');
        $juri->kategori_id = $request->input('kategori_id');
        $juri->username = $request->input('username');
        $juri->password = $request->input('password');
        $juri->save();

        return redirect('ecodeeepis/juri');

    }

    public function edit($id)
    {
        $juri = Juri::findOrFail($id);
        $view = view('backend.pages.juri.edit');
        $view->list_kategori = Kategori::all();
        $view->juri = $juri;
        return $view;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'asal_politeknik' => 'required',
            'username' => 'required',
            'password' => 'required',
            'kategori_id' => 'required',
        ]);

        $juri = Juri::findOrFail($id);
        $juri->nama = $request->input('nama');
        $juri->asal_politeknik = $request->input('asal_politeknik');
        $juri->kategori_id = $request->input('kategori_id');
        $juri->username = $request->input('username');
        $juri->password = $request->input('password');
        $juri->save();

        return redirect('ecodeeepis/juri');

    }

    public function destroy(Request $request, $id)
    {
        $juri = Juri::findOrFail($id);
        $juri->delete();
        return redirect('ecodeeepis/juri');
    }

    public function cekJumlah($juri)
    {
        $tim_masuk = Penilaian::select('tim_id')->get()->toArray();
        $tim_masuk_juri = Penilaian::select('tim_id')->where('juri_id', $juri)->get();

        $view = view('backend.pages.juri.random');
        $view->list_tim = Tim::joinPenilaian()->where('penilaians.juri_id', $juri)->get();
        $view->jumlah = Tim::where('status', 'Tahap Seleksi')
            ->whereNotIn('kategori_id', [7,8])
            ->where(function($query) use ($juri) {
                if (in_array($juri, [9,10])) {
                    $query->where('politeknik_id', '!=', 18);
                }
            })
            ->whereNotIn('id', $tim_masuk)
            ->get()
            ->count();
        $view->juri = $juri;
        $view->random = $view->list_tim ? 2 : 0;
        $view->item = 0;
        return $view;
    }

    public function random($juri, $random)
    {
        $tim_masuk = Penilaian::select('tim_id')->get()->toArray();
        $list_tim_tahap_seleksi = Tim::where('status', 'Tahap Seleksi')
            ->whereNotIn('kategori_id', [7,8])
            ->where(function($query) use ($juri) {
                if (in_array($juri, [9,10])) {
                    $query->where('politeknik_id', '!=', 18);
                }
            })
            ->whereNotIn('id', $tim_masuk)->get();
        
        if ($random > $list_tim_tahap_seleksi->count()) {
            return 0;
        }

        $view = view('backend.pages.juri._form-random');
        $view->list_tim = $list_tim_tahap_seleksi->random($random);
        $view->juri = $juri;
        $view->random = $random;
        $view->item = $random == 1 ? $list_tim_tahap_seleksi->random($random) : 0;
        return $view;

    }

    public function setJuri(Request $request)
    {
        $this->validate($request, [
            'juri_id' => 'required',
            'tim_id' => 'required',
        ]);
        
        $tim = $request->input('tim_id');
        $juri_id = $request->input('juri_id');
        $penilaian = Penilaian::where('juri_id', $juri_id)->delete();

        \DB::beginTransaction();
        for ($i=0; $i<count($tim); $i++) {
            $penilaian = new Penilaian;
            $penilaian->juri_id = $juri_id;
            $penilaian->tim_id = $tim[$i];
            $penilaian->total = 0;
            $penilaian->save();
        }
        \DB::commit();

        return 1;
    }
}
