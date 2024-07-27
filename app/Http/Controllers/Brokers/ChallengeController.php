<?php

namespace App\Http\Controllers\Brokers;

use App\Http\Controllers\Controller;
use App\Models\challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index()
    {
        $challenges = challenge::with('challengeFile')->with('user')->where('status','accept')->get();

        return view('panel.brokers.challenges.index',compact('challenges'));
    }
}
