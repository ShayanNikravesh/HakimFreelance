<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware(['Auth:web','Auth:managers'])->except(['destroy','confirm','show']);
    }

    public function index()
    {
        $id = auth()->user()->id;
        $ideas = Idea::where('user_id',$id)->get();

        return view('main.profile.ideas.index' ,compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::error();

        $request -> validate([
            'idea'=>['required','max:250'],
            'file'=>['file','mimes:jpg,png,pdf','max:2048'],
        ]);

        $user_id = auth()->user()->id;

        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file->storeAs('file/idea',$fileName,'public');

        $idea = new Idea();
        $idea->user_id = $user_id;
        $idea->idea = $request->idea;
        $idea->file = 'storage/'.$filePath;
        $idea->save();

        Alert::success('عملیات موفق.', 'ایده شما برای مدیر ارسال شد ، در این صفحه می توانید از وضعیت آن باخبر شوید.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    public function ideas()
    {

        $ideas = Idea::with('user')->get();

        return view('panel.managers.users.ideas',compact('ideas'));
    }

    public function changeStatus(Request $request,string $id)
    {
        $idea = Idea::findOrFail($id);
        $status = $request->status;

        $idea->status = $status;
        $idea->save();

        Alert::success('عملیات موفق', 'وضعیت تغییر کرد.');

        return redirect()->back();
    }

    public function delete($id)
    {
        $idea = Idea::findOrFail($id);
        $idea->forceDelete();

        Alert::success('عملیات موفق', 'ایده حذف شد.');

        return redirect()->back();
    }

}
