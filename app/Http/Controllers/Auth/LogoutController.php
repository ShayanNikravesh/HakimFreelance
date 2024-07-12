<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function App\Helpers\get_guard;

class LogoutController extends Controller
{
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard(get_guard())->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin-login');
    }
}
