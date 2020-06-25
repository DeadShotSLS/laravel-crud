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

        if ($request->image !=null){
            $file = $request->file('image');

            $profileSave = time() . Auth::id() . "-post." . $file->getClientOriginalExtension();
            $public_path = 'img/product/';
            $path_url = $public_path . $profileSave;
            $file->move($public_path, $profileSave);

            } else {
            $path_url = 'img/product/NO_IMG.png';
            }

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        $product->name = $request->p_name;
        $product->description = $request->p_desc;
        $product->price = $request->price;
        $product->image = $path_url;
        $product->user_id = $userid;
        $product->save();

        return view('Member.Pages.home');
    }

    public function index()
    {
        $data = product::all();

        return view('home')->with('products',$data);
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
