<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tim;
use App\Admin;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
      // $data['ck'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori', '=', 'Cipta Inovasi');
      // })->count();
      // $data['tik'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori','Bisnis TIK');
      // })->count();
      // $data['game'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori','Game Development');
      // })->count();
      // $data['gov'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori','E-Goverment');
      // })->count();
      // $data['iot'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori','IoT');
      // })->count();
      // $data['animasi'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori','Desain Animasi');
      // })->count();
      // $data['jaringan'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori','Keamanan Jaringan');
      // })->count();
      // $data['hack'] = Tim::whereHas('lomba', function ($query) {
      //   $query->where('kategori','Hackathon');
      // })->count();
      return view('backend.pages.dashboard.index');
    }

    public function index() {
      $data['data'] = Admin::orderBy('id', 'DESC')->get();
 
       return view('backend.pages.admin.index', $data);
   }

   public function create()
  {
      return view('backend.pages.admin.create');
  }

  public function store(Request $request)
  {
        $req = $request->all();
        
        $req['is_activated'] = 1;

        $req['password'] = \Hash::make($req['password']);

        $result = Admin::create($req);

        return redirect('ecodeeepis/admin')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
  }

    public function edit($id)
    {
      $data['data'] = Admin::find($id);

      return view('backend.pages.admin.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');

        $req['password'] = \Hash::make($req['password']);

        $req['is_activated'] = 1;

        $result = Admin::where('id', $id)->update($req);

        return redirect('ecodeeepis/admin')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Admin::find($id);
      $result->delete();

      return redirect('ecodeeepis/admin')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}