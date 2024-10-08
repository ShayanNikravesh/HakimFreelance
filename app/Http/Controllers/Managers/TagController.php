<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $tags = Tag::all();
       $parentTags = Tag::whereNull('parent_id')->get();
       $title = 'حذف دسته!';
       $text = "آیا از حذف این دسته اطمینان دارید؟";
       confirmDelete($title, $text);
       return view('panel.managers.tags.index',compact('tags','parentTags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentTag = Tag::whereNull('parent_id')->get();
        return view('panel.managers.tags.create',compact('parentTag'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::error();

        $request -> validate([
            'name' => ['required'],
        ]);

        $Tag = new Tag();
        $Tag->name = $request->name;
        $Tag->parent_id = $request->parent_id;
        $Tag->save();

        Alert::success('عملیات موفق', 'دسته ثبت شد.');

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
        $tag = Tag::findOrFail($id);

        $parentTags = Tag::whereNull('parent_id')->get();
        return view('panel.managers.tags.edit',compact('tag','parentTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Tag = Tag::findOrFail($id);

        $request -> validate([
            'name' => ['required'],
        ]);

        $Tag->name = $request->name;
        $Tag->parent_id = $request->parent_id;
        $Tag->save();

        Alert::success('عملیات موفق', 'دسته ویرایش شد.');

        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $child = Tag::where('parent_id',$id)->get();
        $tag = Tag::with('brokers')->findOrFail($id);

        if(count($child) == 0)
        {
            if(count($tag->brokers) == 0){
                $Tag = Tag::findOrFail($id);
                $Tag->forceDelete();

                Alert::success('عملیات موفق','دسته حذف شد.');
                return redirect()->back();

            }else
            {
                Alert::warning('اخطار','در این دسته کارگزار ثبت شده است.');
                return redirect()->back();
            }
        }

        Alert::warning('اخطار','دسته دارای زیرمجموعه است.');
        return redirect()->back();

    }
}
