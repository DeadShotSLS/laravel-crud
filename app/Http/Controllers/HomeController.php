<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use domain\Facade\ProductFacade;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function Products()
    {
        $product = ProductFacade::allProduct();

        return view('welcome')->with('products',$product);
    }

    public function view($id)
    {
        $product = ProductFacade::oneProduct($id);

        return view('view')->with('product',$product);
    }
}
