<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Broker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BrokerController extends Controller
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
        $request -> validate([
            'f_name' => ['required','max:120'],
            'l_name' => ['required','max:120'],
            'mobile' => ['required','numeric','starts_with:09'],
            'gender' => ['required'],
            'national_code' => ['required','numeric','unique:brokers,national_code'],
            'photo' => ['required','max:2028','image','mimes:jpeg,png,jpg'],
            'password'=>['required','min:8','confirmed'],
            'desc' => ['required','max:250'],
            'address' => ['required','max:250'],
        ]);

        $fileName = time().'_'.$request->photo->getClientOriginalName();
        $filePath = $request->photo->storeAs('brokersphoto',$fileName,'public');
        
        $broker = new Broker();
        $broker->f_name = $request->f_name;
        $broker->l_name = $request->l_name;
        $broker->mobile = $request->mobile;
        $broker->gender = $request->gender;
        $broker->national_code = $request->national_code;
        $broker->password = Hash::make($request->password);
        $broker->desc = $request->desc;
        $broker->address = $request->address;
        $broker->photo = 'storage/'.$filePath;

        $broker->save();

        return redirect()->back()->with('success','product decremented successfully!');

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