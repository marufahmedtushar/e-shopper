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

    public function userinfostore(Request $request)
    {
    	$this->validate($request,[
            'birthday' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);

        $userinfo = new UserInfo();
        $userinfo-> user_id = Auth::id();
        $userinfo->birthday = $request->input('birthday');
        $userinfo->gender = $request->input('gender');
        $userinfo->address = $request->input('address');
        $userinfo->save();
    	return redirect('/userprofile')->with('status','Information added..');
    }
}
