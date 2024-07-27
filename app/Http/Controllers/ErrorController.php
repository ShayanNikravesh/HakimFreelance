<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{

    public function __construct()
    {
        $this->middleware('web');
    }

    public function notFoundWeb()
    {
        return response()->view('errors.web.404');
    }

    public function notFoundPanel()
    {
        return response()->view('errors.panel.404');
    }
}
