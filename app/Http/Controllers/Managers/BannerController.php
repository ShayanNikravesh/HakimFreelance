<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();

        return view('panel.managers.banners.index',compact('banners'));

    }

    public function store(Request $request)
    {
        Alert::error();

        $request->validate([
            'photo' => ['required','max:2028','image','mimes:jpeg,png,jpg']
        ]);

        $fileName = time().'_'.$request->photo->getClientOriginalName();
        $filePath = $request->photo->storeAs('banners',$fileName,'public');

        $banner = new Banner();
        $banner->photo = 'storage/'.$filePath;
        $banner->save();

        Alert::success('عملیات موفق.', 'بنر ذخیره شد.');

        return redirect()->back();

    }

    public function create()
    {
        return view('panel.managers.banners.create');
    }

    public function delete($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::disk('public')->delete($banner->photo);
        unlink(public_path($banner->photo));
        $banner->forceDelete();

        Alert::success('عملیات موفق', 'بنر حذف شد.');

        return redirect()->back();

    }
}
