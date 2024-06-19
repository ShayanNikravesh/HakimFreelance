<?php

use Illuminate\Support\Facades\Auth;

function get_guard(): ?string
{
    if (Auth::guard('managers')->check()) {
        return "App/Models/Manager";
    }

    if (Auth::guard('brokers')->check()) {
        return "App/Models/Broker";
    }

    if (Auth::guard('web')->check()) {
        return "App/Models/User";
    }

    return null;
}
