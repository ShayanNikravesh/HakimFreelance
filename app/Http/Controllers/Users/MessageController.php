<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Auth;
use App\Models\Broker;
use App\Models\Message;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('Auth')->except(['store']);
    }
    public function index()
    {
        return view('users.messages');
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

        $request->validate([
            'broker_id' => ['required'],
            'user_id' => ['required'],
            'message' => ['required','max:250']
        ]);

        $message = new Message();
        $message->broker_id = $request->broker_id;
        $message->user_id = $request->user_id;
        $message->message = $request->message;

        $message->save();

        Alert::success('عملیات موفق.', 'پیام ارسال شد.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Broker $broker)
    {

        if($broker->usersMessage()->where('id', Auth('web')->id())->first()) {
            $messages = Message::where("broker_id", $broker->id)->where("user_id", Auth('web')->id())->get();
            return view('users.usermessages', compact('messages'));
        }
        return 0;
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
        //
    }
}
