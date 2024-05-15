<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $tags = Tag::all();
       $parentTags = Tag::whereNull('parent_id')->get();
       return view('panel.tags.index',compact('tags','parentTags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentTag = Tag::whereNull('parent_id')->get();
        return view('panel.tags.create',compact('parentTag'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => ['required'],
        ]);

        $Tag = new Tag();
        $Tag->name = $request->name;
        $Tag->parent_id = $request->parent_id;
        $Tag->save();

        return redirect()->route('categories.index');
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
        $tags = Tag::findOrFail($id);

        $parentTags = Tag::whereNull('parent_id')->get();
        return view('panel.tags.edit',compact('tags','parentTags'));
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

        return redirect()->route('panel.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
