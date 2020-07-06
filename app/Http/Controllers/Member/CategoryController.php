<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use domain\Facade\CategoryFacade;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\CrudMail;

class CategoryController extends ParentController
{
    /**
     * Category_Add
     *
     * @param  mixed $request
     * @return void
     */
    public function Category_Add(CategoryRequest $request)
    {
        CategoryFacade::addCategory($request);

        return redirect('/member/add_category');
    }


    /**
     * Category_Delete
     *
     * @param  mixed $id
     * @return void
     */
    public function Category_Delete($id)
    {
        CategoryFacade::deleteCategory($id);

        return redirect()->back();
    }

    /**
     * Category_Update
     *
     * @param  mixed $id
     * @return void
     */
    public function Category_Update($id)
    {
        $category = CategoryFacade::findCategory($id);

        return view('Member.Pages.update_category')->with('category_data',$category);
    }

    /**
     * Category_Updates
     *
     * @param  mixed $request
     * @return void
     */
    public function Category_Updates(CategoryRequest $request)
    {
        CategoryFacade::updateCategory($request);

        return redirect('/member/add_category');
    }
}
