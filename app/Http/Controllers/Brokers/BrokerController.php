<?php

namespace App\Http\Controllers\Brokers;

use App\Http\Controllers\Controller;
use App\Models\Broker;
use Illuminate\Http\Request;

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('panel.brokers.index');
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
        //
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
        $broker = Broker::findOrfail(auth('brokers')->id());
        return view('panel.brokers.profile.edit',compact('broker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $broker = Broker::findOrFail($id);
        $broker->forceDelete();

        return redirect()->back();
    }

    public function changeStatus(Request $request,string $id)
    {
        $broker = Broker::findOrFail($id);
        $status = $request->status;

        $broker->status = $status;
        $broker->save();

        return redirect()->back();
    }

    public function signupReq()
    {
        $brokers = Broker::where('status','inactive')->get();
        return view('panel.managers.brokers.request',compact('brokers'));
    }
}
