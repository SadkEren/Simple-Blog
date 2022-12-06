<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Response;
use Illuminate\Validation\Rules\Enum;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;

use DB;

class AdminController extends Controller
{


    public function indexA()
    {
        $gel = User::all()->where('id','5');
        return view('pages.admin.index',['go'=>$gel]);
    }

    public function index()
    {

        //Bunun ile middleware siz girşi engelliyor.
        Gate::define('isAdmin', function($user){
            return $user->role == 'admin';
        });

        return view('pages.admin.index');

    }

    public function userInfo()
    {
        Gate::define('isAdmin', function($user){
            return $user->role == 'admin';
        });

        $gel = User::all();


        return view('/pages.admin.users',['yaz' => $gel]);
    }


    //________________Users________________
    public function usersDelete($id)
    {
        $bul = User::find($id);

        $resimyol = public_path().'/images/'.$bul->userImage;
        unlink($resimyol);

        $bul->delete();
        return back();
    }

    public function usersGetEdit($id)
    {
        $bul = User::where('id',$id)->first();
        return view('/pages.admin.usersEdit',['yaz' => $bul]);
    }

    public function userEditPost(Request $request ,$id)
    {
        $veriDogrula = $request->validate([
            'name'      =>  'required|string',
            'email'     =>  'required|string',
            'about'     =>  'required|string',
            'from'      =>  'required|string',
            'ban'       =>  'required|integer',
            'userImage' =>  'nullable|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $bul = User::find($id);
        $resimyol = public_path('images'.$bul->userImage);

        if(File::exists($resimyol))
        {
            File::delete($resimyol);
        }

        $newImageName = time().'-'.$request->name.'.'.$request->userImage->extension();
        $request->userImage->move(public_path('images'), $newImageName);

        $edit = User::where('id',$request->id)->update([
            'name'      => $request->name,
            'email'     =>  $request->email,
            'about'     =>  $request->about,
            'from'      =>  $request->from,
            'ban'       =>  $request->ban,
            'userImage' =>  $newImageName
        ]);

        return back();
    }

}
