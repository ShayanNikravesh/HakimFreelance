<?php

namespace App\Http\Controllers;

use App\Models\challenge;
use App\Models\challengeFile;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ChallengeController extends Controller
{

    public function index()
    {
        $id = auth()->user()->id;
        $challenges = challenge::with('challengeFile')->where('user_id',$id)->get();

        return view('users.challenges',compact('challenges'));
    }

    public function store(Request $request)
    {
        Alert::error();
        
        $request -> validate([
            'title'=>['required','max:250'],
            'desc'=>['required','max:250'],
            'files.*'=>['file','mimes:jpg,png,pdf','max:2048'],
        ]);

        $user_id = auth()->user()->id;

        $challenge = new challenge();
        $challenge->user_id = $user_id;
        $challenge->title = $request->title;
        $challenge->desc = $request->desc;
        $challenge->save();

        $id = $challenge->id;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = time().'_'.$file->getClientOriginalName();
                $filePath = $file->storeAs('file/challenge',$fileName,'public');
                
                $challengeFile = new challengeFile();
                $challengeFile->challenge_id = $id;
                $challengeFile->file = 'storage/'.$filePath;
                $challengeFile->save();

            }
        } 

        Alert::success('عملیات موفق.', 'چالش شما پس از بررسی مدیر یرای کارگزاران ارسال خواهد شد.');

        return redirect()->back();
    }
}
