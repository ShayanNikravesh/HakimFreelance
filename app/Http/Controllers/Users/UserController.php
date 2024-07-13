<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index');
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
            'f_name' => ['required','max:120'],
            'l_name' => ['required','max:120'],
            'mobile' => ['required','numeric','starts_with:09','unique:users,mobile'],
            'national_code' => ['required','numeric','unique:users,national_code'],
            'password'=>['required','min:8','confirmed'],
        ]);

        $user = new User();
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->mobile = $request->mobile;
        $user->national_code = $request->national_code;
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::success('اطلاعات ثبت شد.', 'پس از تایید مدیریت ثبت نام انجام می شود.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrfail(auth()->user()->id);
        return view('users.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrfail(auth()->user()->id);
        return view('users.edit',compact('user'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrfail(auth()->user()->id);

        $request->validate([
            'f_name' => ['required','max:120'],
            'l_name' => ['required','max:120'],
            'mobile' => 'exclude_if:mobile,' . auth()->user()->mobile . '|numeric|max:255|starts_with:09|unique:users,mobile,' . auth()->id(),
            'national_code' => 'exclude_if:national_code,' . auth()->user()->national_code . '|numeric|max:255|unique:users,national_code,' . auth()->id(),
            'password'=>['min:8','confirmed','nullable'],
        ]);

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->mobile = $request->mobile;
        $user->national_code = $request->national_code;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        Alert::success('عملیات موفق.', 'اطلاعات ویرایش شد.');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
