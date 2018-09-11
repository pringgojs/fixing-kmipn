<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galeri;
use App\User;
use Illuminate\Support\Facades\Storage;
use Image;
use File;

class GaleriController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

    public function index()
    {
      $data['data'] = Galeri::orderBy('id', 'desc')->get();

      return view('backend.pages.galeri.index', $data);
    }

    public function create()
    {
      return view('backend.pages.galeri.create');
    }

    public function store(Request $request)
    {
      $req = $request->all();

      if ($request->hasFile('image')) {
        if ($request->file('image')->isValid()) {
            $destinationPath = 'galeri/'; // upload path
            $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
            Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
          		$constraint->aspectRatio();
          		$constraint->upsize();
          	})->save($destinationPath.$fileName);
            $req['photo'] = $fileName;
            unset($req['image']);
        }
      }

      $result = Galeri::create($req);

      return redirect('ecodeeepis/galeri')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Saved Success.',
      ));
    }

    public function edit($id)
    {
      $data['data'] = Galeri::find($id);

      return view('backend.pages.galeri.edit', $data);
    }

    public function update($id, Request $request)
    {
      $req = $request->except('_method', '_token', 'submit');

      if ($request->hasFile('image')) {
        if ($request->file('image')->isValid()) {
          $destinationPath = 'galeri/'; // upload path
          $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renaming image
          $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
          Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
          })->save($destinationPath.$fileName);
          $req['photo'] = $fileName;
          unset($req['image']);

          $result = Galeri::find($id);
          if (!empty($result->photo)) {
            File::delete('galeri/'.$result->photo);
          }
        }else {
          unset($req['photo']);
        }
      }else {
        unset($req['photo']);
      }

      $result = Galeri::where('id', $id)->update($req);

      return redirect('ecodeeepis/galeri')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Saved Success.',
      ));
    }

    public function destroy($id)
    {
      $result = Galeri::find($id);
      if (!empty($result->photo)) {
        File::delete('galeri/'.$result->photo);
      }
      $result->delete();

      return redirect('ecodeeepis/galeri')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
