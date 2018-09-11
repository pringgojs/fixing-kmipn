<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Tim;
use App\Lomba;
use App\Kategori;
use App\Artikel;
use App\Galeri;
use App\Politeknik;
use Illuminate\Support\Facades\Storage;
use Image;
use File;

class PagesController extends Controller
{

    public function index(){
      $data['lomba1'] = Lomba::with('kategori')->offset(0)->take(4)->get();
      $data['lomba2'] = Lomba::with('kategori')->offset(4)->take(8)->get();
      $data['artikel'] = Artikel::where('status', 'Publish')->get();
      $data['galeri'] = Galeri::get();
      return view('frontend.pages.dashboard', $data);
    }

    public function tentang() {
        return view('frontend.pages.tentang');
    }

    public function lomba() {
        return view('frontend.pages.lomba');
    }

    public function iot () {
        return view('frontend.pages.iot');
    }

    public function bistik () {
        return view('frontend.pages.bistik');
    }

    public function hackathon () {
        return view('frontend.pages.hackathon');
    }

    public function anim () {
        return view('frontend.pages.anim');
    }

    public function game () {
        return view('frontend.pages.game');
    }

    public function egov () {
        return view('frontend.pages.egov');
    }

    public function jaringan () {
        return view('frontend.pages.jaringan');
    }

    public function cipta () {
        return view('frontend.pages.cipta');
    }

    public function info() {
        $data['artikel'] = Artikel::get();

        return view('frontend.pages.info', $data);
    }

    public function viewLogin(){
      return view('frontend.pages.login');
    }

    public function viewRegister(){
      $data['kategori'] = Kategori::get();
      $data['politeknik'] = Politeknik::get();
      return view('frontend.pages.register',$data);
    }

    public function forgot(){
      return view('frontend.pages.forgot');
    }

    public function viewProfile(){
      $data['tim'] = Tim::find(auth()->user()->tim_id);
      $data['anggota'] = User::where('tim_id',$data['tim']->id)->get();
      $data['nullProposal'] = Tim::where('users_id',\Auth::user()->id)->whereNull('file_proposal')->first();
      return view('frontend.pages.profile.dashboard',$data);
    }

    public function viewInfoTim(){
      $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
      if ($data['tim']->total_anggota == 0) {
        return redirect(url('profile/anggota'));
      }
      $data['politeknik'] = Politeknik::get();

//        $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
        $data['anggota'] = User::where('tim_id',$data['tim']->id)->get();
        $data['nullProposal'] = Tim::where('users_id',\Auth::user()->id)->whereNull('file_proposal')->first();
      return view('frontend.pages.profile.info',$data);
    }

    public function viewAddAnggota(){
        $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
        if ($data['tim']->total_anggota == 0) {
          return redirect(url('profile/anggota'));
        }
        $data['anggota'] = User::where('tim_id',$data['tim']->id)->get();
        $data['nullProposal'] = Tim::where('users_id',\Auth::user()->id)->whereNull('file_proposal')->first();

      return view('frontend.pages.profile.add_anggota', $data);
    }

    public function viewAnggota(){
        $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
        $data['anggota'] = User::where('tim_id',$data['tim']->id)->get();
        $data['nullProposal'] = Tim::where('users_id',\Auth::user()->id)->whereNull('file_proposal')->first();

        return view('frontend.pages.profile.anggota', $data);
    }

    public function viewProposal(){
        $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
        $data['anggota'] = User::where('tim_id',$data['tim']->id)->get();
        $data['nullProposal'] = Tim::where('users_id',\Auth::user()->id)->whereNull('file_proposal')->first();

        return view('frontend.pages.profile.proposal', $data);
    }

    public function viewFaq(){
      return view('frontend.pages.faq');
    }

    public function viewJadwal(){
      return view('frontend.pages.jadwal');
    }

    public function edit_anggota($id){
        $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();
        if ($data['tim']->total_anggota == 0) {
          return redirect(url('profile/anggota'));
        }
        $data['anggota'] = User::where('tim_id',$data['tim']->id)->get();
        $data['nullProposal'] = Tim::where('users_id',\Auth::user()->id)->whereNull('file_proposal')->first();
      $data['data'] = User::where('id',$id)->first();
      return view('frontend.pages.profile.edit_anggota',$data);
    }

    public function submit_edit_anggota($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');
        
        if (!empty($req['password'])) {
          $req['password'] = \Hash::make($req['password']);
        }else {
          unset($req['password']);
        }

        if ($request->hasFile('image')) {
          if ($request->file('image')->isValid()) {
            $destinationPath = 'ktm/'; // upload path
            $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
            Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
              $constraint->aspectRatio();
              $constraint->upsize();
            })->save($destinationPath.$fileName);
            $req['photo'] = $fileName;
            unset($req['image']);
  
            $result = User::find($id);
            if (!empty($result->photo)) {
              File::delete('ktm/'.$result->photo);
            }
          }else {
            unset($req['photo']);
          }
        }else {
          unset($req['photo']);
        }

        $result = User::where('id', $id)->update($req);

        return redirect(url('profile/dashboard'))->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function submit_add_anggota(Request $request)
    {
          $req = $request->all();
          $data['tim'] = Tim::where('users_id',\Auth::user()->id)->first();

          if($data['tim']->total_anggota == '0'){
            return redirect(url('profile/dashboard'))->withInput()->with('message', array(
              'title' => 'Oops!',
              'type' => 'danger',
              'msg' => 'Failed.',
            ));
          }else{
            $req['tim_id'] = $data['tim']->id;
            Tim::where('users_id',\Auth::user()->id)->update(array(
              'total_anggota' => $data['tim']->total_anggota - 1
            ));

            if ($request->hasFile('image')) {
              if ($request->file('image')->isValid()) {
                  $destinationPath = 'ktm/'; // upload path
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
            $result = User::create($req);

            return redirect(url('profile/anggota'))->withInput()->with('message', array(
              'title' => 'Yay!',
              'type' => 'success',
              'msg' => 'Saved Success.',
            ));
          }
    }

    public function submit_delete_anggota($id)
    {
      $result = User::find($id);
      $tim1 = Tim::where('users_id',\Auth::user()->id)->first();
      $tim2 = Tim::where('users_id',\Auth::user()->id)->update(array(
        'total_anggota' => $tim1->total_anggota + 1
      ));
      if($result->role == 'Ketua'){
        return redirect(url('profile/anggota'))->withInput()->with('message', array(
          'title' => 'Oops!',
          'type' => 'danger',
          'msg' => 'Tidak bisa menghapus ketua',
        ));
      }else{
        $result->delete();

        return redirect(url('profile/anggota'))->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Deleted data.',
        ));
      }
    }

    public function submit_edit_tim($id, Request $request)
    {
        $req = $request->except('_method', '_token', 'submit');
        
        if ($request->hasFile('file_proposal')) {
          if ($request->file('file_proposal')->isValid()) {
            $file = $request->file('file_proposal');
            $destinationPath = 'proposal/'; // upload path
          //$extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = $file->getClientOriginalName(); // renaming image
            $file->move($destinationPath, $fileName); // uploading file to given path
            $req['file_proposal'] = $fileName;

            $result1 = Tim::find($id);
            if (!empty($result1->file_proposal)) {
              File::delete('proposal/'.$result1->file_proposal);
            }
          }else {
            unset($req['file_proposal']);
          }
        }else {
          unset($req['file_proposal']);
        }

        $req['status'] = 'Daftar';

        $result = Tim::where('id', $id)->update($req);

        return redirect(url('profile/dashboard/'))->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function viewArtikel($slug){
      $data['artikel'] = Artikel::where('slug', $slug)->first();
      return view('frontend.pages.artikel', $data);
    }

    public function verifikasi(Request $request) {
      $tim = Tim::where('users_id', auth()->user()->id)->first();
      $tim->status_approved = 1;
      $tim->save();
      
      $request->session()->flash('status', '1');
      return redirect('profile/dashboard');
    }
}
