<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if(Auth::guard('managers')->attempt($credentials, $request->remember)){
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'national_code'=> 'national_code or password is false'
        ])->onlyInput('national_code');
    }
}
