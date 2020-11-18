<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserInfo;
use App\Category;
use App\Product;


class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('index')->with('products',$products)->with('category',$category);
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

    public function categorydetails($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('categorydetails')->with('category',$category)->with('categories',$categories);
    }
    public function productdetails($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $products = Product::all();
        return view('productdetails')->with('product',$product)->with('categories',$categories)->with('products',$products);
    }
}
