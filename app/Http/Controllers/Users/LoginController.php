<?php

namespace App\Http\Controllers\Users;
use Salehhashemi\OtpManager\Facade\OtpManager;

use App\Http\Controllers\Controller;
use App\Jobs\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'mobile'=>['required','numeric']
        ]);

        $mobile = $request->mobile;
        $sentOtp = OtpManager::send($mobile);
        Session::put($mobile,$sentOtp);

        // Redis::set($mobile,$sentOtp);

        return view('users.verify',compact('mobile','sentOtp'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'code'=>['required','numeric']
        ]);

        $mobile = $request->mobile;
        $verify = Session::get($mobile);


        $isVerified = OtpManager::verify($mobile,$request->code,$verify->trackingCode);

        if($isVerified == true){
            //login or register codes
            // if (Auth::guard('managers')->attempt($mobile, $request->remember)) {
            //     $request->session()->regenerate();

            //     return redirect('/');
            // }
            dd('hi');
        }
        
    }
}
