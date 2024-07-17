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
            'mobile'=> ['required','numeric'],
            'password'=> ['required',],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('عملیات موفق.', 'خوش آمدید.');
            return redirect('/');
        }

        Alert::warning('عملیات ناموفق.', 'ثبت نام شما تایید نشده است.');
        return back()->withErrors([
            'email'=> 'mobile or password is false'
        ])->onlyInput('mobile');
    }

    public function exit()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
