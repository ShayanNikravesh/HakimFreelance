<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Broker;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::error();

        $request -> validate([
            'f_name' => ['required','max:120'],
            'l_name' => ['required','max:120'],
            'mobile' => ['required','numeric', 'regex:/^(\+98|0)?9\d{9}$/', 'unique:brokers'],
            'gender' => ['required'],
            'national_code' => ['required','numeric','unique:brokers,national_code'],
            'photo' => ['required','max:2028','image','mimes:jpeg,png,jpg'],
            'password'=>['required','min:8','confirmed'],
            'tag'=>['required'],
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

        $tag = Tag::find($request->tag);
        $broker->tags()->attach($tag);

        Alert::success('اطلاعات ثبت شد.', 'پس از تایید مدیریت ثبت نام انجام می شود.');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $broker = Broker::with('tags')->findOrfail($id);
        $comments = Comment::with('user')->where('broker_id',$id)->where('status','active')->get();
        if(comment::where('broker_id',$id)->where('status','active')->count()) {
            $ratingAverage = ceil(comment::where('broker_id', $id)->where('status', 'active')->sum('rating') / comment::where('broker_id', $id)->where('status', 'active')->count());
        }else{
            $ratingAverage = 3;
        }
        $Case = ["عملکرد خیلی ضعیف", "عملکرد ضعیف", "عملکرد مناسب", "عمکرد خوب", "عملکرد خیلی خوب"];
        switch ($ratingAverage){
            case 1:
                $ratingWord = $Case[1];
                break;
            case 2:
                $ratingWord = $Case[2];
                break;
            case 3:
                $ratingWord = $Case[3];
                break;
            case 4:
                $ratingWord = $Case[4];
                break;
            case 5:
                $ratingWord = $Case[5];
                break;

        }
        return view('main.brokers.show',compact(['broker','comments', 'ratingWord']));
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

    public function search(Request $request)
    {

        $search = $request->search;
        $results = Broker::where('desc', 'like', "%$search%")->get();

        return view('main.search',compact('results'));

    }
}
