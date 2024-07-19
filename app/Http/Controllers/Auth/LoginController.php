<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Broker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        if ($request->table_name == 1) {

            $credentials = $request->validate([
                'email'=> ['required', ],
                'password'=> ['required', ],
            ]);

            if (Auth::guard('managers')->attempt($credentials, $request->remember)) {
                $request->session()->regenerate();
                Alert::success('عملیات موفق.', 'خوش آمدید.');
                return redirect('admin/panel');
            }
            return back()->withErrors([
                'email'=> 'email or password is false'
            ])->onlyInput('email');
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
