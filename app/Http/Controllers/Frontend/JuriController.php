<?php

namespace App\Http\Controllers\Frontend;

use App\Juri;
use App\Indikator;
use App\Penilaian;
use App\PenilaianDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JuriController extends Controller
{
    public function index()
    {
        $view = view('frontend.juri.index');
        $view->list_penilaian = Penilaian::where('juri_id', session('id'))->get();
        return $view;
    }

    public function nilai($id)
    {
        $view = view('frontend.juri.nilai');
        $view->penilaian = Penilaian::findOrFail($id);
        $view->list_indikator = Indikator::all();
        return $view;
    }

    public function store(Request $request)
    {
        $penilaian = Penilaian::findOrFail($request->input('penilaian_id'));
        $list_indikator = Indikator::all();
        $total = 0;
        \DB::beginTransaction();
        PenilaianDetail::where('penilaian_id', $penilaian->id)->delete();
        
        foreach ($list_indikator as $indikator) {
            if (!$request->input('value_'.$indikator->id)) {
                $request->session()->flash('error', 'Pastikan semua kriteria diisi');
                return redirect('juri/'.$penilaian->id);
            }

            $detail = new PenilaianDetail;
            $detail->penilaian_id = $penilaian->id;
            $detail->indikator_id = $indikator->id;
            $detail->skor = $request->input('value_'.$indikator->id);
            $detail->save();

            $total += $request->input('value_'.$indikator->id);

        }

        $penilaian->saran = $request->input('saran');
        $penilaian->total = $total;
        $penilaian->save();
        \DB::commit();

        $request->session()->flash('success', 'Data berhasil disimpan');
        return redirect('juri');
    }

    public function login()
    {
        if (session('juri')) return redirect('juri');

        $view = view('frontend.juri.login');
        return$view;
    }

    public function loginProcess(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required'
        ]);
        
        $juri = Juri::where('username', $request->input('username'))->where('password', $request->input('password'))->first();

        if (!$juri) {
            $request->session()->flash('error', 'Data tidak ditemukan');
            return redirect('juri/login');
        }

        session(['juri' => 'juri']);
        session(['username' => $request->input('username')]);
        session(['name' => $juri->nama]);
        session(['id' => $juri->id]);

        return redirect('juri');
    }

    public function logout()
    {
        session()->forget('juri');
        session()->forget('username');
        session()->forget('name');
        session()->forget('id');
        return redirect('juri/login');
    }
}
