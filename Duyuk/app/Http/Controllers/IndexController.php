<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;

use DB;

class IndexController extends Controller
{


    public function callAbout()
    {

        return view('pages.about');
    }

    public function callContact()
    {

        return view('pages.contact');
    }

    public function callEntries()
    {
        $gel3 = Category::all()->sortByDesc('rank');

        $gel = DB::table('entries')->where('categories_name' , 'Daily')->orderby('created_at','desc')->paginate(4);
        $gel2 = DB::table('entries')->where('categories_name' , 'Sports')->orderby('created_at','desc')->paginate(4);
        return view('/pages.index',['yaz' => $gel, 'yaz2' => $gel2, 'yaz3' => $gel3]);

    }


    public function callUserprofile($id)
    {
        $gel = User::find($id);

        $gel3 = Entry::find($id);
        $gel2 = DB::table('entries')->where('user_id',$id)->orderby('created_at','desc')->paginate(2); // Son son iki datayı getirdim. I did call last 2 data.

        return view('pages.profiles.userProfiles', ['gel' => $gel, 'yaz2' => $gel2 , 'yaz3' => $gel3]);
    }


    public function callDuyuk()
    {
        $gel = Category::all();
        return view('/pages.duyuk',['yaz'=> $gel]);
    }


    public function callProfile($user_id)
    {
        $gel2 = User::find($user_id);
        $gel = DB::table('entries')->where('user_id' , $user_id)->paginate(5);
        return view('/pages.profile',['yaz' => $gel, 'b' => $gel2]);
    }


    public function profileGet($id)
    {

        $a = User::find($id);
        return view('pages.profiles.infoProfileEdit',['b' => $a]);
    }

    public function profilePost(Request $request , $id)
    {
        $veriDogrula = $request->validate([
            'name'        => 'required|string',
            'from'        => 'required|string',
            'about'       => 'required|string',
            'userImage'   => 'mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $fotofind = User::find($id);
        $destination = public_path('images'.$fotofind->userImages);

        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $newImageName = time().'-'.$request->name.'.'.$request->userImages->extension();
        $request->userImages->move(public_path('images'), $newImageName);

        $guncel = User::where('id',$request->id)->update([
            'name' => $request->name,
            'from' => $request->from,
            'about' => $request->about,
            'userImage' => $newImageName
        ]);

        return back();

    }




    public function newDuyuk(Request $request)
    {
        $veriDogurla = $request->validate([
            'title'           => 'required|string' ,
            'content'         => 'required|string',
            'user_name'       => 'required|string',
            'user_id'         => 'required|integer',
            'categories_name' => 'required|string',
            'imageEntry'      => 'required|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $newImageName = time() .'-'.$request->title.'.'.$request->imageEntry->extension();

        $request->imageEntry->move(public_path('images'), $newImageName);

        Entry::create([
            'title'           => $request->title,
            'content'         => $request->content,
            'user_name'       => $request->user_name,
            'user_id'         => $request->user_id,
            'categories_name' => $request->categories_name,
            'imageEntry'      => $newImageName
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
        $gel2 = Category::all();
        $gel = Entry::find($id);
        return view('/pages.profiles.editProfile',['yaz'=>$gel, 'yaz2' =>$gel2 ]);
    }

    public function entryEditPost(Request $request , $id)
    {

        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'categories_name' => 'required|string',
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
            'categories_name' => $request->categories_name,
            'imageEntry' => $newImageName
        ]);

        return back();
    }





}
