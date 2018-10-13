<?php

namespace App\Http\Controllers\Backend;

use App\Indikator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndikatorController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:admin');
    }

    public function index()
    {
        $view = view('backend.pages.indikator.index');
        $view->list_indikator = Indikator::all();

        return $view;
    }

    public function create()
    {
        $view = view('backend.pages.indikator.create');
        return $view;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kriteria' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $indikator = new Indikator;
        $indikator->kriteria = $request->input('kriteria');
        $indikator->deskripsi = $request->input('deskripsi');
        $indikator->save();

        return redirect('ecodeeepis/indikator');

    }

    public function edit($id)
    {
        $view = view('backend.pages.indikator.edit');
        $view->indikator = Indikator::findOrFail($id);
        return $view;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kriteria' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $indikator = Indikator::findOrFail($id);
        $indikator->kriteria = $request->input('kriteria');
        $indikator->deskripsi = $request->input('deskripsi');
        $indikator->save();

        return redirect('ecodeeepis/indikator');

    }

    public function destroy(Request $request, $id)
    {
        $indikator = Indikator::findOrFail($id);
        $indikator->delete();
        return redirect('ecodeeepis/indikator');
    }
}
