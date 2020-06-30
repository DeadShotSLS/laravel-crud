<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\product as AppProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends ParentController
{

        protected $product;
        protected $category;

        public function __construct()
        {
            $this->product = new Product();
            $this->category = new Category();
        }


        public function ProductAdd(Request $request){

        // $this->validate($request,[
        //     'task'=>'required|max:200|min:5',
        // ]);

        if ($request->image !=null){
            $file = $request->file('image');

            $profileSave = time() . Auth::id() . "-post." . $file->getClientOriginalExtension();
            $public_path = 'img/product/';
            $path_url = $public_path . $profileSave;
            $file->move($public_path, $profileSave);

            } else {
            $path_url = 'img/product/NO_IMG.png';
            }

        $this->product->name = $request->p_name;
        $this->product->description = $request->p_desc;
        $this->product->price = $request->price;
        $this->product->c_id = $request->category;
        $this->product->image = $path_url;
        $this->product->user_id = Auth::user()->id;
        $this->product->save();

        $data = Product::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('Member.Pages.home')->with('products',$data);
    }

    public function Products()
    {
        // filter product by user id

        $data = Product::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('home')->with('products',$data);
    }

    public function ProductDelete($id){
        $this->product = product::find($id);
        if(file_exists($this->product->image)) {
            @unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back();
    }

    public function ProductUpdate($id){
        $this->product = product::find($id);

        $data = Category::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('Member.Pages.update')->with('product_data',$this->product)->with('categories',$data);
    }


    public function ProductUpdates(Request $request){

        $id=$request->id;
        $this->product = product::find($id);

        if ($request->image !=null){
            $file = $request->file('image');

            $profileSave = time() . Auth::id() . "-post." . $file->getClientOriginalExtension();
            $public_path = 'img/product/';
            $path_url = $public_path . $profileSave;
            $file->move($public_path, $profileSave);

            if(file_exists($this->product->image)) {
                @unlink($this->product->image);
            }

            } else {
            $path_url = 'img/product/NO_IMG.png';
            }



            $this->product->name = $request->p_name;
            $this->product->description = $request->p_desc;
            $this->product->price = $request->price;
            $this->product->c_id = $request->category;
            $this->product->image = $path_url;
            $this->product->update();

            $data = Product::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('Member.Pages.home')->with('products',$data);
    }
}
