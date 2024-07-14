<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Broker;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brokers = Broker::with('tags')->whereIn('status', ['active', 'banned'])->get();
        return view('panel.managers.brokers.index',compact('brokers'));
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
    public function destroy($id)
    {
        $broker = Broker::findOrFail($id);
        $broker->forceDelete();

        Alert::success('عملیات موفق', 'درخواست حذف شد.');

        return redirect()->back();
    }

    public function changeStatus(Request $request,string $id, string $Status)
    {
        $broker = Broker::findOrFail($id);

        $broker->status = $Status;
        $broker->save();

        Alert::success('عملیات موفق', 'وضعیت تغییر کرد.');

        return redirect()->back();
    }

    public function signupReq()
    {
        $brokers = Broker::with('tags')->where('status','inactive')->get();
        return view('panel.managers.brokers.request',compact('brokers'));
    }
}
