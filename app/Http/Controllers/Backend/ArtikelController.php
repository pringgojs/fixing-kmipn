<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Artikel;
use App\User;
use Illuminate\Support\Facades\Storage;
use Image;
use File;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $data['data'] = Artikel::orderBy('id', 'desc')->get();
        return view('backend.pages.artikel.index', $data);
    }

    public function create()
    {
       return view('backend.pages.artikel.create');
    }

    public function store(Request $request)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $destinationPath = 'artikel/'; // upload path
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
        $req['slug'] = str_slug($req['title']);

        $result = Artikel::create($req);

        return redirect('ecodeeepis/artikel')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function edit($id)
    {
      $data['data'] = Artikel::find($id);

      return view('backend.pages.artikel.edit', $data);
    }

    public function update($id, Request $request)
    {
      $req = $request->except('_method', '_token', 'submit');

      if ($request->hasFile('image')) {
        if ($request->file('image')->isValid()) {
          $destinationPath = 'artikel/'; // upload path
          $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renaming image
          $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
          Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
          })->save($destinationPath.$fileName);
          $req['photo'] = $fileName;
          unset($req['image']);

          $result = Artikel::find($id);
          if (!empty($result->photo)) {
            File::delete('artikel/'.$result->photo);
          }
        }else {
          unset($req['photo']);
        }
      }else {
        unset($req['photo']);
      }

      $req['slug'] = str_slug($req['title']);

      $result = Artikel::where('id', $id)->update($req);

      return redirect('ecodeeepis/artikel')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Saved Success.',
      ));
    }

    public function destroy($id)
    {
      $result = Artikel::find($id);
      if (!empty($result->photo)) {
        File::delete('artikel/'.$result->photo);
      }
      $result->delete();

      return redirect('ecodeeepis/artikel')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
