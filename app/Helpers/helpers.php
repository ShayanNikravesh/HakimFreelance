<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

function get_guard(): ?string
{
    if (Auth::guard('managers')->check()) {
        return "managers";
    }

    if (Auth::guard('brokers')->check()) {
        return "brokers";
    }

    if (Auth::guard('web')->check()) {
        return "web";
    }

    return null;
}
