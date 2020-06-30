<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends ParentController
{
    protected $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function Category_Add(Request $request){

        $this->category->c_name = $request->c_name;
        $this->category->user_id= Auth::user()->id;
        $this->category->save();

        $data = Category::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return redirect()->back()->with('categories',$data);
    }

    public function Category_Delete($id){
        $this->category = Category::find($id);
        $this->category->delete();

        return redirect()->back();
    }

    public function Category_Update($id){
        $category = Category::find($id);

        return view('Member.Pages.update_category')->with('category_data',$category);
    }

    public function Category_Updates(Request $request){
        $id=$request->id;
        $this->category = Category::find($id);
        $this->category->c_name = $request->c_name;
        $this->category->update();

        $data = Category::orderBy('id')
                            ->where('user_id',Auth::user()->id)
                            ->get();

        return view('Member.Pages.add_category')->with('categories',$data);
    }
}
