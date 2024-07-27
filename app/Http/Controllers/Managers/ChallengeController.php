<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\challenge;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ChallengeController extends Controller
{
    public function index()
    {
        $challenges = challenge::with('challengeFile')->with('user')->get();

        return view('panel.managers.challenges.index',compact('challenges'));
    }

    public function changeStatus(Request $request,string $id)
    {
        $challenge = challenge::findOrFail($id);
        $status = $request->status;

        $challenge->status = $status;
        $challenge->save();

        Alert::success('عملیات موفق', 'وضعیت تغییر کرد.');

        return redirect()->back();
    }
}
