<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
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
        $userid = Auth::user()->id;

        $data = Product::orderBy('id')
                            ->where('user_id',$userid)
                            ->get();

        return view('Member.Pages.home')->with('products',$data);
    }

    public function add()
    {
        return view('Member.Pages.add');
    }
}
