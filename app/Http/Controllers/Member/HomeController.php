<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use domain\Facade\CategoryFacade;
use Illuminate\Support\Facades\Auth;
use domain\Facade\ProductFacade;

class HomeController extends ParentController
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**
     * home
     *
     * @return void
     */
    public function home()
    {
        $product = ProductFacade::getUserAllProduct(Auth::user()->id);

        return view('Member.Pages.home')->with('products',$product);
    }

    /**
     * add
     *
     * @return void
     */
    public function add()
    {
        $category = CategoryFacade::getUserCategory(Auth::user()->id);

        return view('Member.Pages.add')->with('categories',$category);
    }

    /**
     * add_category
     *
     * @return void
     */
    public function add_category()
    {
        $category = CategoryFacade::getUserCategory(Auth::user()->id);

        return view('Member.Pages.add_category')->with('categories',$category);
    }

}
