<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index',[
            'categories'=>Category::all(),
        ]);
    }

    public function create(Request $request)

    {
//            DB::table('categories')->insert([
//                'name'=> $request->name,
//                'description'=> $request->description,
//                'image'=> $request->image,
//                'status'=> $request->status,
//            ]);
        SubCategory::newSubCategory($request);
        return back()->with('message', 'Successfully Created');
    }
    public function manage()
    {
        return view('admin.sub-category.manage',[
            'sub_categories' => SubCategory::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.sub-category.edit',[
            'categories'=> Category::all(),
            'sub_category' => SubCategory::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
//        return redirect('admin.category.add')->with('message','Info Updated Successfully');
        return redirect('sub-category/manage')->with('message', 'successfully Updated');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('sub-category/manage')->with('message', 'Category Deleted Successfully');
    }
}
