<?php

namespace App\Http\Controllers;

use App\Mail\PasswordReset;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('admin.password-reset');
    }

    public function sendResetEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();

        //generate code for authentication
        $code = Str::uuid();

        //send code with route by email
        if($user){
            //update code to db
            $user->update([
                'password_reset_code' => $code
            ]);

            //sending email for resetting password
            Mail::send(new PasswordReset($email, $code));

            return view('admin.password-reset')->with(['success' => 'Email Sent Successful. Check Your Email!']);
        }

        return view('admin.password-reset')->with(['error' => 'Account Doesn\'t Exist!']);
    }


    /**
     * @param $code
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetPassword($code){

        if($code){
            $user = User::where('password_reset_code', $code)->first();

            if($user){
                return view('admin.confirm-password', compact('code'));
            }

            return view('admin.login')->with(['error' => 'Wrong Code']);
        }

        return view('admin.login')->with(['error' => 'Wrong Code']);
    }


    /**
     * @param Request $request
     * @param $code
     * @return $this
     */
    public function resetPassword(Request $request, $code)
    {
        $this->validate($request, [
            'password'          => 'required',
            'confirm_password'  => 'required'
        ]);

        if($code){

            if($request->password == $request->confirm_password){

                $user = User::where('password_reset_code', $code)->first();

                $user->update([
                    'password'            => bcrypt($request->password),
                    'password_reset_code' => null
                ]);

                return redirect()->route('login')->with(['success' => 'Password Reset Is Successful']);
            }

            return back()->with(['message' => 'Password Mismatch']);
        }

        return redirect()->route('login')->with(['error' => 'Wrong Code']);
    }
}
