<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
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
        //
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
        $request -> validate([
            'broker_id'=>['required','numeric'],
            'comment'=>['required','max:250']
        ]);

        $user_id = auth()->user()->id;

        $comment = new Comment();
        $comment->broker_id = $request->broker_id;
        $comment->user_id = $user_id;
        $comment->comment = $request->comment;

        $comment->save();

        Alert::success('عملیات موفق.', 'پس از تایید مدیریت نظر شما ثبت خواهد شد.');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comments = Comment::with('user')->where('broker_id',$id)->where('status','inactive')->get();
        return view('panel.managers.brokers.comments',compact('comments'));
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
        $comment = Comment::findOrFail($id);
        $comment->forceDelete();

        Alert::success('عملیات موفق', 'نظر حذف شد.');

        return redirect()->back();
    }

    public function confirm(Request $request,string $id)
    {
        $comment = Comment::findOrFail($id);
        $status = $request->status;

        $comment->status = $status;
        $comment->save();

        Alert::success('عملیات موفق', 'نظر تایید شد.');

        return redirect()->back();
    }

    public function userComments()
    {
        $id = auth()->user()->id;
        $comments = Comment::with('broker')->where('user_id',$id)->get();
        return view('users.usercomments',compact('comments'));
    }
}
