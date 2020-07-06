<?php

/**
* Author: Spera Labs/(+94)112 144 533
* Email: hello@speralabs.com
* File Name: UserFacade.php
* Copyright: Any unauthorised broadcasting, public performance, copying or re-recording will constitute an infringement of copyright.
*/

namespace domain\Category;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CategoryService
{
    protected $product;
    protected $category;

   public function __construct()
   {
       $this->product = new Product();
       $this->category = new Category();
    }


   /**
    * getUserCategory
    *
    * @param  mixed $id
    * @return void
    */
   public function getUserCategory($id)
   {
       return $this->category->orderBy('id')->where('user_id',$id)->get();
   }

   /**
    * addCategory
    *
    * @param  mixed $request
    * @return void
    */
   public function addCategory($request)
   {
        $this->category->c_name = $request->c_name;
        $this->category->user_id= Auth::user()->id;
        $this->category->save();
   }

   /**
    * deleteCategory
    *
    * @param  mixed $id
    * @return void
    */
   public function deleteCategory($id)
   {
        $this->category = Category::find($id);
        $this->category->delete();
   }

   /**
    * findCategory
    *
    * @param  mixed $id
    * @return void
    */
   public function findCategory($id)
   {
       return $this->category->find($id);
   }

   /**
    * updateCategory
    *
    * @param  mixed $request
    * @return void
    */
   public function updateCategory($request)
   {
        $id=$request->id;
        $this->category = Category::find($id);
        $this->category->c_name = $request->c_name;
        $this->category->update();
   }

}
