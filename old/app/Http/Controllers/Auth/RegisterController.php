<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Lomba;
use App\Kategori;
use App\Tim;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jurusan' => 'required',
            'no_mahasiswa' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'fullname' => 'required',
            'alamat' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return $user = User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'jurusan' => $data['jurusan'],
            'no_mahasiswa' => $data['no_mahasiswa'],
            'no_telp' => $data['no_telp'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'alamat' => $data['alamat'],
            'role' => 'Ketua'
        ]);
    }

    public function register(Request $request) {
        $input = $request->except('kategori_id','nama_tim','politeknik_id');
        $validator = $this->validator($input);
        $userMail = User::where('email',$input['email'])->count();

        if($userMail > 0){
          return redirect()->back()->withInput()->with('message', array(
            'title' => 'Oops!',
            'type' => 'danger',
            'msg' => 'Your email has been registered',
          ));
        }else{
          if ($validator->passes()){
            \DB::beginTransaction();
            $user = $this->create($input)->toArray();
            $link = str_random(30);
            \DB::table('user_activations')->insert(['users_id'=>$user['id'],'token'=>$link]);
            $data = [
                'link' => url('user/activation/'. $link),
                'fullname' => $user['fullname']
            ];
            \Mail::send('frontend._email-verification', $data,
                function ($message) use ($user){
                    $message->to($user['email'])->subject('KMIPN - Success Registered');
                }
            );
            
            $userMail2 = User::where('email',$input['email'])->first();
            $input2 = $request->only('kategori_id','nama_tim','politeknik_id');
            $tim = Kategori::where('id',$input2['kategori_id'])->first();

            if($tim->kategori == "Hackathon"){
                $datatim = Tim::create([
                    'users_id' => $userMail2->id,
                    'kategori_id' => $input2['kategori_id'],
                    'politeknik_id' => $input2['politeknik_id'],
                    'nama_tim' => $input2['nama_tim'],
                    'total_anggota' => 4
                ]);
                User::where('id',$userMail2->id)->update(array(
                    'tim_id' => $datatim->id
                ));
            }else{
                $datatim = Tim::create([
                    'users_id' => $userMail2->id,
                    'kategori_id' => $input2['kategori_id'],
                    'politeknik_id' => $input2['politeknik_id'],
                    'nama_tim' => $input2['nama_tim'],
                    'total_anggota' => 2
                ]);
                User::where('id',$userMail2->id)->update(array(
                    'tim_id' => $datatim->id
                ));
            }

            \DB::commit();
  
            return redirect()->to('/')->with('message', array(
              'title' => 'Yay!',
              'type' => 'success',
              'msg' => 'Success Registered',
            ));
          }
        }
    }

    public function userActivation($token){
        $check = \DB::table('user_activations')->where('token',$token)->first();
        if(!is_null($check)){
          $user = User::find($check->users_id);
          if ($user->is_activated == 1){
            return redirect()->to('/')->with('message', array(
              'title' => 'Oops!',
              'type' => 'danger',
              'msg' => 'User are already actived.',
            ));
          }
          $user->is_activated = 1;
          $user->save();
          \DB::table('user_activations')->where('token',$token)->delete();
  
          return redirect()->to('/')->with('message', array(
            'title' => 'Yay!',
            'type' => 'success',
            'msg' => 'User active successfully. Now you can login with your account.',
          ));
        }
  
        return redirect()->to('/')->with('message', array(
          'title' => 'Oops!',
          'type' => 'danger',
          'msg' => 'Your token is invalid.',
        ));
      }

}
