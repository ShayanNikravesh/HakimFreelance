<?php

namespace App\Http\Controllers\Users;
use Salehhashemi\OtpManager\Facade\OtpManager;

use App\Http\Controllers\Controller;
use App\Jobs\Email;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'national_code'=> ['required','numeric'],
            'password'=> ['required',],
        ]);

        $user = User::where('national_code', $request->national_code)->first();

        if($user->status == 'active'){
            if (Auth::attempt($credentials)) {
                // کاربر با موفقیت وارد سایت شد
                Alert::success('عملیات موفق.', 'خوش آمدید.');
                return redirect('/');

            }
            return back()->withErrors([
                'message'=> 'کد ملی یا رمز اشتباه است.'
            ]);
        }

        Alert::warning('عملیات ناموفق.', 'ثبت نام شما تایید نشده است.');
        return redirect('/');
    }

}
