<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function Products(){
        $data = product::all();

        return view('welcome')->with('products',$data);
    }

    public function view($id){
        $product = product::find($id);

        return view('view')->with('product',$product);

    }
}
