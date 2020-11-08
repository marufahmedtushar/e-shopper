<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserInfo;


class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

     public function userprofile(Request $request)
    {
    	 $users = User::all();
        return view('userprofile')->with('users',$users);
    }

    public function userinfosave(Request $request,$id)
    {
    	

        $userinfo = User::find($id);
        $userinfo->name = $request->input('name');
        $userinfo->phone = $request->input('phone');
        $userinfo->email = $request->input('email');
        $userinfo->birthday = $request->input('birthday');
        $userinfo->gender = $request->input('gender');
        $userinfo->division = $request->input('division');
        $userinfo->address = $request->input('address');
        $userinfo->save();
    	return redirect('/userprofile')->with('status','Information Updated..');
    }
}
