<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'national_code'=> ['required', ],
            'password'=> ['required', ],
        ]);

        if(Auth->attempt($credentials, $request->remember)){
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email'=> 'email or password is false'
        ])->onlyInput('email');
    }
}
