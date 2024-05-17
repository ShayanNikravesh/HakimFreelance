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
        if ($request->table_name == 1) {

            $credentials = $request->validate([
                'email'=> ['required', ],
                'password'=> ['required', ],
            ]);

            if (Auth::guard('managers')->attempt($credentials, $request->remember)) {
                $request->session()->regenerate();

                return redirect('admin-panel');
            }
            return back()->withErrors([
                'email'=> 'email or password is false'
            ])->onlyInput('email');
        }
        $credentials = $request->validate([
            'national_code'=> ['required', ],
            'password'=> ['required', ],
        ]);

        if (Auth::guard('brokers')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return redirect('broker-panel');
        }
        return back()->withErrors([
            'national_code'=> 'national_code or password is false'
        ])->onlyInput('national_code');

    }
}
