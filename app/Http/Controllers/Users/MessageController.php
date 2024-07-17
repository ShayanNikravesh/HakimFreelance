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
        $brokers = auth()->user()->brokersMessage()->distinct()->get();

        return view('users.messages', compact('brokers'));
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
            'message_content' => ['required','max:250']
        ]);


        $message = new Message();
        $message->broker_id =  $request->broker_id;
        $message->user_id = auth()->user()->id;
        $message->sender = 'user';
        $message->message_content = $request->message_content;

        $message->save();

        Alert::success('عملیات موفق.', 'پیام ارسال شد.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $broker)
    {

        if(Broker::find($broker)->usersMessage()->where('users.id', '=',Auth('web')->id())->first()) {
            $messages = Message::where("broker_id", Broker::find($broker)->id)->where("user_id", Auth('web')->id())->get();
            $broker_id = $broker;
            return view('users.usermessages', compact('messages', 'broker_id'));
        }
        return 'k';
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
