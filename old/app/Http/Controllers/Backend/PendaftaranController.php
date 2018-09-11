<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Tim;
use App\Lomba;
use App\Politeknik;

class PendaftaranController extends Controller
{
  public function __construct()
  {
       $this->middleware('auth:admin');
  }

    public function daftar() {
	    $data['data'] = Tim::whereHas('users', function ($query) {
        $query->where('role', '=', 'Ketua');
      })->whereNull('file_proposal')->where('status','Daftar')->orderBy('id', 'DESC')->get();

      $data['politeknik'] = Politeknik::orderBy('id', 'DESC')->get();

      return view('backend.pages.pendaftaran.daftar', $data);
    }
    
    public function tahap_seleksi() {
        $data['data'] = Tim::whereHas('users', function ($query) {
          $query->where('role', '=', 'Ketua');
        })->where('status','Tahap Seleksi')->orderBy('id', 'DESC')->get();

      $data['politeknik'] = Politeknik::orderBy('id', 'DESC')->get();
 
       return view('backend.pages.pendaftaran.tahap_seleksi', $data);
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
}
