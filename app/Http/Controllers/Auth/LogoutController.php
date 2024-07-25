<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use function App\Helpers\get_guard;

class LogoutController extends Controller
{
    public function logout(Request $request, string $type='admin-login'): RedirectResponse
    {
        Auth::guard(get_guard())->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        if($type === 'web')
            $type = '';
        return redirect($type);
    }

    // public function logout(Request $request)
    // {
    //     Auth::guard(get_guard())->logout();

    //     $request->session()->invalidate();

    //     return Route::permanentRedirect()->back()
    // }
}
