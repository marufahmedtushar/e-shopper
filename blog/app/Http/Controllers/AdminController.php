<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.dashboard');

    }

    public function users(){
           $users = User::all();
        return view('admin.users')->with('users',$users);
    }

    public function userroleupdate(Request $request){
        $users = User::findOrFail($request->id);
        $users->user_type = $request->input('user_type');
        $users->update();

        return redirect('/users')->with('status','User Role Updated...');
    }

    public function userdelete(Request $request)
    {

        $users = User::findOrFail($request->user_id);
        $users->delete();

        return redirect('/users')->with('status','User Deleted...');

    }

    public function categories()
    {
    	$categories = Category::all();
        return view('admin.categories')->with('categories',$categories);

    }

    public function catstore(Request $request){

        $this->validate($request,[
            'name' => 'required'
      
            

        ]);



        $cat = new Category();
        $cat->name = $request->input('name');
        $cat-> user_id = Auth::id();
        $cat->save();

        return redirect('/categories')->with('status','New Category Created...');
    }


    public function updatecat(Request $request){
        $cat = Category::findOrFail($request->id);
        $cat->name = $request->input('name');
        $cat->status = $request->input('status');

        $cat->update();

        return redirect('/categories')->with('status','Category Updated...');
    }
}
