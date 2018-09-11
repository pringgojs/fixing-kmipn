<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Politeknik;

class PoliteknikController extends Controller
{
  public function __construct()
    {
         $this->middleware('auth:admin');
    }

  public function index() {
	   $data['data'] = Politeknik::orderBy('id', 'DESC')->get();

      return view('backend.pages.politeknik.index', $data);
  }

	public function create()
  {
     return view('backend.pages.politeknik.create');
  }

  public function store(Request $request)
  {
      	$req = $request->all();

        $result = Politeknik::create($req);

        return redirect('ecodeeepis/politeknik')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
  }

    public function edit($id)
    {
      $data['data'] = Politeknik::find($id);

      return view('backend.pages.politeknik.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');

        $result = Politeknik::where('id', $id)->update($req);

        return redirect('ecodeeepis/politeknik')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Politeknik::find($id);
      $result->delete();

      return redirect('ecodeeepis/politeknik')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
