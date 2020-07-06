<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\product as AppProduct;
use domain\Facade\CategoryFacade;
use domain\Facade\ProductFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductController extends ParentController
{
    /**
     * ProductAdd
     *
     * @param  mixed $request
     * @return void
     */
    public function ProductAdd(ProductRequest $request)
    {
        ProductFacade::addProduct($request);

        return redirect('/member/home');
    }

    /**
     * Products
     *
     * @return void
     */
    public function Products()
    {
        $product = ProductFacade::getUserProduct(Auth::user()->id);

        return view('home')->with('products',$product);
    }

    /**
     * ProductDelete
     *
     * @param  mixed $id
     * @return void
     */
    public function ProductDelete($id)
    {
        ProductFacade::deleteProduct($id);

        return redirect()->back();
    }

    /**
     * ProductUpdate
     *
     * @param  mixed $id
     * @return void
     */
    public function ProductUpdate($id)
    {
        $product = ProductFacade::oneProduct($id);
        $category = CategoryFacade::getUserCategory(Auth::user()->id);

        return view('Member.Pages.update')->with('product_data',$product)->with('categories',$category);
    }


    /**
     * ProductUpdates
     *
     * @param  mixed $request
     * @return void
     */
    public function ProductUpdates(ProductRequest $request)
    {
        ProductFacade::updateProduct($request);

        return redirect('/member/home');
    }

    public function StatusUpdate(Request $request){
        ProductFacade::updateStatus($request);

        return response()->json(['success'=>'Product status change successfully.']);
    }
}
