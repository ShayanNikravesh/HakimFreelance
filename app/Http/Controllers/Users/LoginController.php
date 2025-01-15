<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Broker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('main.auth.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'national_code'=> ['required','numeric'],
            'password'=> ['required',],
        ]);
        if ($request->table_name == 1){
        $user = User::where('national_code', $request->national_code)->first();
        if(!empty($user))
        {
            if($user->status === 'active'){
                if (Auth::guard('web')->attempt($credentials)) {
                    $request->session()->regenerate();
                    Alert::success('عملیات موفق.', 'خوش آمدید.');
                    return redirect('/');

                }
                return back()->withErrors([
                    'message'=> 'کد ملی یا رمز اشتباه است.'
                ]);
            }
            return back()->withErrors([
                'message'=> 'ثبت نام شما تایید نشده است.'
            ]);
        }

        return back()->withErrors([
            'message'=> 'کد ملی یا رمز اشتباه است'
        ]);
    }
        $credentials = $request->validate([
            'national_code'=> ['required', ],
            'password'=> ['required', ],
        ]);

        $broker = Broker::where('national_code',$request->national_code)->first();

        if(!empty($broker))
        {
            if($broker->status == 'active'){
                if (Auth::guard('brokers')->attempt($credentials, $request->remember)) {
                    $request->session()->regenerate();
                    Alert::success('عملیات موفق.', 'خوش آمدید.');
                    return redirect('broker/panel');
                }
                return back()->withErrors([
                    'message'=> 'کد ملی یا رمز عبور اشتباه است.'
                ]);
            }

            return back()->withErrors([
                'message'=> 'ثبت نام شما تایید نشده است.'
            ]);
        }

        return back()->withErrors([
            'message'=> 'کد ملی یا رمز اشتباه است.'
        ]);
    }

}
