<?php

namespace App\Http\Controllers\managers;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('panel.managers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.managers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email'=>['email','required'],
            'password'=>['required','min:6'],
            'level'=>['required'],
        ]);

        $manager = new Manager();
        $manager->f_name = $request->first_name;
        $manager->l_name = $request->last_name;
        $manager->email = $request->email;
        $manager->password = Hash::make($request->password);
        $manager->level = $request->level;

        $manager->save();

        return redirect()->route('managers.index');
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
