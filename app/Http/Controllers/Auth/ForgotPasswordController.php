<?php

namespace App\Http\Controllers\Auth;

use App\User;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail()
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('message', array(
                'title' => 'Oops!',
                'type' => 'danger',
                'msg' => 'Validation failed.',
            ));
        }

        $check = User::where('email', request('email'))->first();

        if ($check) {

            $reset_code = str_random(5);

            DB::table('password_resets')->where('email', $check->email)->delete();
            DB::table('password_resets')->insert([
                'email' => $check->email,
                'token' => $reset_code,
                'created_at' => new DateTime
            ]);
            
            $data = [
                'link' => url('password/reset/'.$reset_code),
                'fullname' => $check->fullname
            ];
            \Mail::send('frontend._email-reset', $data,
                function ($message) use ($check){
                    $message->to($check->email)->subject('KMIPN - Reset Password');
                }
            );

            return redirect()->to('/')->with('message', array(
                'title' => 'Yay!',
                'type' => 'success',
                'msg' => 'Reset code has been send, please check your email.',
            ));
        }else{
            return redirect()->back()->with('message', array(
                'title' => 'Oops!',
                'type' => 'danger',
                'msg' => 'That email address doesn\'t match any user accounts.',
            ));
        }
    }
}
