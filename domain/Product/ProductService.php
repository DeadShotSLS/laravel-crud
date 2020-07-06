<?php

/**
* Author: Spera Labs/(+94)112 144 533
* Email: hello@speralabs.com
* File Name: ProductFacade.php
* Copyright: Any unauthorised broadcasting, public performance, copying or re-recording will constitute an infringement of copyright.
*/

namespace domain\Product;

use App\Image;
use App\Model\Category;
use App\Model\Product;
use domain\Facades\ImageCropperFacade;
use Illuminate\Support\Facades\Auth;
use infrastructure\Facades\ImagesFacade;

class ProductService
{
    protected $product;
    protected $category;

   public function __construct()
   {
       $this->product = new Product();
       $this->category = new Category();
       $this->image = new Image();
    }

   /**
    * allProduct
    *
    * @return void
    */
   public function allProduct()
   {
       return $this->product->orderBy('id')->where('status',1)->get();
   }

   /**
    * oneProduct
    *
    * @param  mixed $id
    * @return void
    */
   public function oneProduct($id)
   {
       return $this->product->find($id);
   }

   /**
    * getUserProduct
    *
    * @param  mixed $id
    * @return void
    */
   public function getUserProduct($id)
   {
       return $this->product->orderBy('id')->where('user_id',$id )->where('status',1)->get();
   }

   public function getUserAllProduct($id)
   {
       return $this->product->orderBy('id')->where('user_id',$id )->get();
   }

   /**
    * addProduct
    *
    * @param  mixed $request
    * @return void
    */
   public function addProduct($request)
   {
        if($request->has('image')){
            $image=ImagesFacade::up($request->file('image'),[2,12,9,10,13,14]);
        }

        $this->product->name = $request->p_name;
        $this->product->description = $request->p_desc;
        $this->product->price = $request->price;
        $this->product->c_id = $request->category;
        $this->product->image = $image->id;
        $this->product->user_id = Auth::user()->id;
        $this->product->save();
   }

   /**
    * deleteProduct
    *
    * @param  mixed $id
    * @return void
    */
   public function deleteProduct($id)
   {
        $this->product = product::find($id);
        $this->image = image::find($this->product->image);
        $this->image->delete();
        $this->product->delete();
   }

   /**
    * updateProduct
    *
    * @param  mixed $request
    * @return void
    */
   public function updateProduct($request)
   {
        $id=$request->id;
        $this->product = product::find($id);

        if($request->has('image')){
            $image=ImagesFacade::up($request->file('image'),[2,12,9,10,13,14]);
        }



        $this->product->name = $request->p_name;
        $this->product->description = $request->p_desc;
        $this->product->price = $request->price;
        $this->product->c_id = $request->category;
        $this->product->image = $image->id;
        $this->product->update();
    }

    public function updateStatus($request){

        $this->product = product::find($request->id);

        $this->product->status = $request->status;
        $this->product->update();
    }

}
