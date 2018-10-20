<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function __construct()
    {
         $this->middleware('auth:admin');
    }

  public function index() {
	   $data['data'] = User::orderBy('id', 'DESC')->get();

      return view('backend.pages.users.index', $data);
  }

  public function store(Request $request)
  {
      	$req = $request->all();

        $req['password'] = \Hash::make($req['password']);

        $result = User::create($req);

        return redirect('ecodeeepis/admin')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
  }

    public function edit($id)
    {
      $data['data'] = User::find($id);

      return view('backend.pages.users.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');

        $req['password'] = \Hash::make($req['password']);

        $result = User::where('id', $id)->update($req);

        return redirect('ecodeeepis/users')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = User::find($id);
      $result->delete();

      return redirect('ecodeeepis/users')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
