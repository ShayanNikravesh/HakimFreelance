<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
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
        ],[
            'first_name.required'=>'وارد کردن نام الزامی است.',
            'last_name.required'=>'وارد کردن نام خانوادگی الزامی است.',
            'email.required'=>'وارد کردن ایمل الزامی است.',
            'email.email'=>'ایمیل را به درستی وارد کنید.',
            'email.unique:managers,email'=>'ایمیل قبلا استفاده شده است.',
            'password.required'=>'وارد کردن رمز الزامی است.',
            'password.confirmed'=>'رمز باید با تکرار رمز برابر باشد.',
            'password.min:6'=>'رمز باید بیشتر از 6 کاراکتر باشد.',
            'level.required'=>'وارد کردن سطح الزامی است.',
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
        $manager = Manager::findOrfail(auth('managers')->id());
        return view('panel.managers.edit',compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $manager = Manager::findOrfail(auth('managers')->id());

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
    
    public function showall()
    {
        $managers = Manager::all();
        return view('panel.managers.show',compact('managers'));  
    }
    
}
