<?php

namespace App\Http\Controllers\Users;
use Salehhashemi\OtpManager\Facade\OtpManager;

use App\Http\Controllers\Controller;
use App\Jobs\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

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
        
        Redis::set($mobile,$sentOtp);

        return view('users.verify',compact('mobile'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'code'=>['required','numeric']
        ]);

        $mobile = $request->mobile;
        $verify = Redis::get($mobile);

        $isVerified = OtpManager::verify($mobile,$request->code,$verify->trackingcode);

        if($isVerified == true){
            //login or register codes
        }
        
    }
}
