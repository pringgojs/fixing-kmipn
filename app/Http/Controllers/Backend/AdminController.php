<?php

namespace App\Http\Controllers\Backend;

use App\Tim;
use App\Admin;
use App\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
      $tgl_kemarin = Carbon::yesterday();
      $view = view('backend.pages.dashboard.index');
      $view->list_kategori = Kategori::all();
      $view->total_tim = Tim::whereNull('deleted_at')->get()->count();
      $view->total_belum_upload_proposal = Tim::whereNull('deleted_at')->where('status_approved', 0)->get()->count();
      $view->total_menunggu_verifikasi = Tim::whereNull('deleted_at')->whereNotNull('file_proposal')->where('status_approved', 1)->get()->count();
      $view->total_ter_verifikasi = Tim::whereNull('deleted_at')->whereNotNull('file_proposal')->where('status_approved', 2)->get()->count();
      // by date
      $view->total_hari_ini = Tim::whereNull('deleted_at')->whereDate('created_at', date('Y-m-d'))->get()->count();
      $view->total_kemarin = Tim::whereNull('deleted_at')->whereDate('created_at', $tgl_kemarin->format('Y-m-d'))->get()->count();
      $view->total_bulan_ini = Tim::whereNull('deleted_at')->whereMonth('created_at', date('m'))->get()->count();
      return $view;
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