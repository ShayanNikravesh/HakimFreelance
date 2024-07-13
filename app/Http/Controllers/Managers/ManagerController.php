<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
            'email'=>'required|string|email|max:255|unique:managers,email',
            'password'=>['required','min:6','confirmed'],
            'level'=>['required'],
        ]);

        $manager = new Manager();
        $manager->f_name = $request->first_name;
        $manager->l_name = $request->last_name;
        $manager->email = $request->email;
        $manager->password = Hash::make($request->password);
        $manager->level = $request->level;

        $manager->save();

        Alert::success('عملیات موفق.', 'مدیر جدید ثبت شد.');

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
        $manager = Manager::findOrfail($id);
        return view('panel.managers.edit',compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $manager = Manager::findOrfail($id);

        $request -> validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email'=>'exclude_if:email,' . auth('managers')->user()->email . '|string|email|max:255|unique:managers,email,' . auth('managers')->id(),
            'password'=>['nullable','min:6','confirmed'],
            'level'=>['required'],
        ]);

        $manager->f_name = $request->first_name;
        $manager->l_name = $request->last_name;
        $manager->email = $request->email;
        if ($request->filled('password')) {
            $manager->password = Hash::make($request->password);
        }
        $manager->level = $request->level;

        $manager->save();

        Alert::success('عملیات موفق.', 'اطلاعات ویرایش شد.');

        return redirect()->route('managers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
