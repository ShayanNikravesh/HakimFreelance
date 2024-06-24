<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login');
    }

    public function verify(Request $request)
    {
        //code
        return view('users.verify');
    }
}
