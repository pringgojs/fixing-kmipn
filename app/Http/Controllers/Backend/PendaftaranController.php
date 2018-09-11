<?php

namespace App\Http\Controllers\Backend;

use App\Tim;
use App\User;
use App\Lomba;
use App\Kategori;
use App\Politeknik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendaftaranController extends Controller
{
  public function __construct()
  {
       $this->middleware('auth:admin');
  }

  public function daftar(Request $request, $type) {
    $ctype = $type;
    if ($type == 'daftar') {
      $type = 'Daftar';
    } elseif ($type == 'tahap_seleksi') {
      $type = 'Tahap Seleksi';
    } elseif ($type == 'lolos') {
      $type = 'Lolos';
    } elseif ($type == 'tidak_lolos') {
      $type = 'Tidak Lolos';
    }  
    $view = view('backend.pages.pendaftaran.daftar');
    $politeknik = $request->input('politeknik');
    $kategori = $request->input('kategori');
    $status_approved = $request->input('status');
    $view->data = Tim::whereHas('users', function ($query) {
        $query->where('role', '=', 'Ketua');
      })
      ->where(function ($q) use ($politeknik) {
        if ($politeknik) {
          $q->where('politeknik_id', $politeknik);
        }
      })
      ->where(function ($q) use ($kategori) {
        if ($kategori) {
          $q->where('kategori_id', $kategori);
        }
      })
      ->where(function ($q) use ($status_approved) {
        if ($status_approved != null) {
          $q->where('status_approved', $status_approved);
        }
      })
      ->where('status', $type)
      ->orderBy('id', 'DESC')
      ->get();
    $view->list_politeknik = Politeknik::all();
    $view->list_kategori = Kategori::all();
    $view->status = $type;
    $view->ctype = $ctype;
    return $view;
  }
    
  public function tahap_seleksi(Request $request) {
      $politeknik = $request->input('politeknik');
      $kategori = $request->input('kategori');
      
      $view = view('backend.pages.pendaftaran.tahap_seleksi');
      $view->data = Tim::whereHas('users', function ($query) {
          $query->where('role', '=', 'Ketua');
        })
        ->where(function ($q) use ($politeknik) {
          if ($politeknik) {
            $q->where('politeknik_id', $politeknik);
          }
        })
        ->where(function ($q) use ($kategori) {
          if ($kategori) {
            $q->where('kategori_id', $kategori);
          }
        })
        ->where('status','Tahap Seleksi')
        ->orderBy('id', 'DESC')
        ->get();
      
      $view->list_politeknik = Politeknik::all();
      $view->list_kategori = Kategori::all();
      return $view;
  }

  public function lolos() {
        $data['data'] = Tim::whereHas('users', function ($query) {
          $query->where('role', '=', 'Ketua');
        })->where('status','Lolos')->orderBy('id', 'DESC')->get();

      $data['politeknik'] = Politeknik::orderBy('id', 'DESC')->get();
 
       return view('backend.pages.pendaftaran.lolos', $data);
     }

     public function tidak_lolos() {
        $data['data'] = Tim::whereHas('users', function ($query) {
          $query->where('role', '=', 'Ketua');
        })->where('status','Tidak Lolos')->orderBy('id', 'DESC')->get();

      $data['politeknik'] = Politeknik::orderBy('id', 'DESC')->get();
 
       return view('backend.pages.pendaftaran.tidak_lolos', $data);
  }

    public function edit($id)
    {
      $data['data'] = Tim::find($id);
      $data['user_count'] = User::where('tim_id',$id)->count();

      $data['anggota'] = User::where('tim_id',$id)->where('role','Anggota')->get();

      $data['politeknik'] = Politeknik::orderBy('id', 'DESC')->get();

      return view('backend.pages.pendaftaran.edit', $data);
    }

    public function update($id, Request $request)
    {
        $req = $request->except('_method','_token','submit');

        
        $result2 = Tim::where('id', $id)->update(array(
          'status'=> $req['status']
        ));

        return redirect()->back()->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Tim::find($id);
      $result->delete();

      return redirect()->back()->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }

    public function verifikasi($id)
    {
      $tim = Tim::findOrFail($id);
      $tim->status_approved = 2;
      $tim->status = 'Tahap Seleksi';
      $tim->save();

      return redirect(url('ecodeeepis/pendaftaran/daftar'));
    }
}
