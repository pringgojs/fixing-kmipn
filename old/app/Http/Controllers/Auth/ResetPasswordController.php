<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function showResetForm(Request $request, $token = null)
    {
        return view('frontend.pages.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function reset() {

        $validator = Validator::make(request()->all(), [
            'email' => 'required',
            'token' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('message', array(
                'title' => 'Oops!',
                'type' => 'danger',
                'msg' => 'Validation failed.',
            ));
        }

        $checkCode = DB::table('password_resets')->where([
            'email' => request('email'),
            'token' => request('token')
        ])->first();


        if ($checkCode) {

            $user = User::where('email', request('email'))->first();

            if ($user) {

                User::where('id', $user->id)->update(['password' => bcrypt(request('password'))]);

                DB::table('password_resets')->where('email', $user->email)->delete();

                return redirect()->to('/')->with('message', array(
                    'title' => 'Yay!',
                    'type' => 'success',
                    'msg' => 'Your password has been reset.',
                ));

            } else {
                return redirect()->back()->with('message', array(
                    'title' => 'Oops!',
                    'type' => 'danger',
                    'msg' => 'The email address doesn\'t match with any account.',
                ));

            }


        } else {
            return redirect()->back()->with('message', array(
                'title' => 'Oops!',
                'type' => 'danger',
                'msg' => 'The reset code doesn\'t match with email address.',
            ));

        }
    }
}
