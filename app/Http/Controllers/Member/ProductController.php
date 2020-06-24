<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\product as AppProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends ParentController
{
    public function ProductAdd(Request $request){
        $product = new Product();

        // $this->validate($request,[
        //     'task'=>'required|max:200|min:5',
        // ]);

        $userid = Auth::user()->id;

        $product->name = $request->p_name;
        $product->description = $request->p_desc;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->user_id = $userid;
        $product->save();

        return view('Member.Pages.home');
    }



    public function Products(){
        $data = product::all();

        return view('welcome')->with('products',$data);
    }





    // public function taskDelete($id){
    //     $task = task::find($id);
    //     $task->delete();
    //     return redirect()->back();
    // }

    // public function taskUpdate($id){
    //     $task = task::find($id);

    //     return view('update_task')->with('taskdata',$task);
    // }

    // public function taskUpdates(Request $request){
    //     $id=$request->id;
    //     $task=$request->task;
    //     $data=task::find($id);
    //     $data->task=$task;
    //     $data->save();

    //     $data=task::all();
    //     return view('Pages.home')->with('tasks',$data);
    // }
}
