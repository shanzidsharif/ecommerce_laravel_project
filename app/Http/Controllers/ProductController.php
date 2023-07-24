<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index',[
            'categories' => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
        ]);
    }
    public function getSubcategoryByCategory(){

        return response()->json('Hello');
    }

    public function create(Request $request)

    {
//            DB::table('categories')->insert([
//                'name'=> $request->name,
//                'description'=> $request->description,
//                'image'=> $request->image,
//                'status'=> $request->status,
//            ]);
        Product::newProduct($request);
        return back()->with('message', 'Product Successfully Created');
    }
    public function manage()
    {
        return view('admin.product.manage',[
            'products' => Product::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.category.edit',[
            'product' => Product::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
//        return redirect('admin.category.add')->with('message','Info Updated Successfully');
        return redirect('product/manage')->with('message', 'Product successfully Updated');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('product/manage')->with('message', 'CategProductory Deleted Successfully');
    }
}
