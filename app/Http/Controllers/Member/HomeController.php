<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends ParentController
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {

        $data = Product::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('Member.Pages.home')->with('products',$data);
    }

    public function add()
    {
        $data = Category::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('Member.Pages.add')->with('categories',$data);
    }

    public function add_category()
    {
        $data = Category::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('Member.Pages.add_category')->with('categories',$data);
    }
}
