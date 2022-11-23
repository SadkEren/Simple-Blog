<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{

    // public function callEntries()
    // {
    //     $gel = Entry::all();
    //     return view('/dashboard',['yaz'=>$gel]);
    // }


    public function callEntries()
    {
        $gel = Entry::all()->sortByDesc('created_at');
        return view('/pages.index',['yaz'=>$gel]);

    }

    public function callDuyuk()
    {
        $gel = Entry::all()->sortByDesc('created_at');
        return view('/pages.duyuk',['yaz'=>$gel]);
    }


    public function callProfile($user_id)
    {
        $gel = Entry::where('user_id' , $user_id)->get();
        return view('/pages.profile',['yaz'=>$gel]);
    }


    public function newDuyuk(Request $request)
    {
        $veriDogurla = $request->validate([
            'title'      => 'required|string' ,
            'content'    => 'required|string',
            'user_name'  => 'required|string',
            'user_id'    => 'required|integer',
            'imageEntry' => 'required|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $newImageName = time() .'-'.$request->title.'.'.$request->imageEntry->extension();

        $request->imageEntry->move(public_path('images'), $newImageName);

        Entry::create([
            'title'      => $request->title,
            'content'    => $request->content,
            'user_name'  => $request->user_name,
            'user_id'    => $request->user_id,
            'imageEntry' => $newImageName
        ]);

        return back();
    }


    public function entrySil($id)
    {
        $sil = Entry::find($id);
        $resimYol = public_path().'/images/'.$sil->imageEntry;
        unlink($resimYol);

        $sil->delete();
        return back();
    }

    public function entryEditGet($id)
    {
        $gel = Entry::find($id);
        return view('/pages.profiles.editProfile',['yaz'=>$gel]);
    }

    public function entryEditPost(Request $request , $id)
    {

        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'imageEntry' => 'nullable|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $foto = Entry::find($id);
        $destination = public_path('images'.$foto->imageEntry);


        if(File::exists($destination))
        {
            File::delete($destination);
        }

            $newImageName = time().'-'.$request->title.'.'.$request->imageEntry->extension();
            $request->imageEntry->move(public_path('images'), $newImageName);

        $guncel = Entry::where('id',$request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'imageEntry' => $newImageName
        ]);

        return back();
    }

    public function callAbout()
    {

        return view('pages.about');
    }

    public function callContact()
    {

        return view('pages.contact');
    }



}
