<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::all();
        $title = 'حذف خبر!';
        $text = "آیا از حذف این خبر اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('panel.managers.infos.index',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.managers.infos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::error('عملیات ناموفق');

        $request->validate([
            'title' => ['required'],
            'english_title' => ['required'],
            'text' => ['required', 'max:1024'],
            'photo' => ['required','max:2028','image','mimes:jpeg,png,jpg'],
        ]);


        $fileName = time().'_'.$request->photo->getClientOriginalName();
        $filePath = $request->photo->storeAs('infosphoto',$fileName,'public');

        $info = new Info();
        $info->title = $request->title;
        $info->english_title = $request->english_title;
        $info->text = $request->text;
        $info->photo = 'storage/'.$filePath;
        $info->save();

        Alert::success('عملیات موفق', 'خبر ثبت شد.');
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
        $info = Info::findOrFail($id);
        return view('panel.managers.infos.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Alert::error('عملیات ناموفق');

        $info = Info::findOrFail($id);

        $request->validate([
            'title' => ['required'],
            'english_title' => ['required'],
            'text' => ['required'],
            'photo' => ['max:2028','image','mimes:jpeg,png,jpg'],
        ]);

        if($request->photo){
            File::delete(public_path($info->photo));
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            $filePath = $request->photo->storeAs('infosphoto',$fileName,'public');
        }

        $info->title = $request->title;
        $info->english_title = $request->english_title;
        $info->text = $request->text;
        if(!empty($filePath)){
            $info->photo = 'storage/'.$filePath;
        }
        $info->save();

        Alert::success('عملیات موفق', 'خبر ویرایش شد.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Info::findOrFail($id);

        if($info){
            File::delete(public_path($info->photo));
        }

        $info->forceDelete();

        Alert::success('عملیات موفق', 'خبر حذف شد.');
        return redirect()->route('info.index');
    }
}
