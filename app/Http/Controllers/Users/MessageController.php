<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        //
    }
}