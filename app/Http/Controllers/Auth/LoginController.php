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
                'email'=> 'ایمیل یا نام کاربری اشتباه میباشد'
            ])->onlyInput('email');
    }
}
