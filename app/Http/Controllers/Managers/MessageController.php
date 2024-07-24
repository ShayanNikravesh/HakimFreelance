<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Auth;
use App\Models\Broker;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('Auth:managers')->except(['store']);
    }
    public function index()
    {
        $messages = Message::all();

        return view('panel.managers.messages.index', compact('messages'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::error();

        $request->validate([
            'user_id' => ['required'],
            'message_content' => ['required','max:250']
        ]);

        $message = new Message();
        $message->broker_id = auth('brokers')->user()->id;
        $message->user_id = $request->user_id;
        $message->message_content = $request->message_content;

        $message->save();

        Alert::success('عملیات موفق.', 'پیام ارسال شد.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
    {
        if(User::find($user)->brokersMessage()->where('brokers.id', '=',Auth('brokers')->id())->first())
        {
            $messages = Message::where("broker_id", Auth('brokers')->id())->where("user_id", $user)->get();
            $user_id = $user;
            return view('panel.brokers.usermessages', compact('messages', 'user_id'));
        }
        return 0;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $message = Message::findOrFail($id);

        $message->status = $request->status;
        $message->save();

        Alert::success('عملیات موفق', 'وضعیت تغییر کرد.');

        return redirect()->back();
    }


}
