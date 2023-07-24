<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
        public function index()
        {
            return view('admin.category.index');
        }

        public function create(Request $request)

        {
//            DB::table('categories')->insert([
//                'name'=> $request->name,
//                'description'=> $request->description,
//                'image'=> $request->image,
//                'status'=> $request->status,
//            ]);
            Category::newCategory($request);
            return back()->with('message', 'Successfully Created');
        }
    public function manage()
    {
        return view('admin.category.manage',[
            'categories' => Category::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.category.edit',[
            'category' => Category::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        Category::Updatecategory($request, $id);
//        return redirect('admin.category.add')->with('message','Info Updated Successfully');
        return redirect('category/manage')->with('message', 'successfully Updated');
    }
    public function delete($id)
    {
         Category::deleteCategory($id);
         return redirect('category/manage')->with('message', 'Category Deleted Successfully');
    }
}
