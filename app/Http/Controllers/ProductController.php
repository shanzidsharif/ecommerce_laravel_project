<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $product;
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


        return response()->json(SubCategory::where('category_id', $_GET['id'])->get());
    }

    public function create(Request $request)

    {
//            DB::table('categories')->insert([
//                'name'=> $request->name,
//                'description'=> $request->description,
//                'image'=> $request->image,
//                'status'=> $request->status,
//            ]);
       // return $request;
        $this->product = Product::newProduct($request);
        OtherImage::getOtherImages($request->other_image ,$this->product->id);
        return back()->with('message', 'Product Successfully Created');
    }
    public function manage()
    {
        return view('admin.product.manage',[
            'products' => Product::all()
        ]);
    }

    public function detail($id)
    {
        return view('admin.product.detail',[
            'product' =>Product::find($id),

        ]);
    }
    public function edit($id)
    {
        return view('admin.product.edit',[
            'product' => Product::find($id),
            'categories' => Category::all(),
            'sub_categories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all(),
        ]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);

        if($request->other_image){
            OtherImage::updateOtherImage($request->other_image, $request->id);
        }
//        return redirect('admin.category.add')->with('message','Info Updated Successfully');
        return redirect('product/manage')->with('message', 'Product successfully Updated');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        OtherImage::deleteOtherImages($id);
        return redirect('product/manage')->with('message', 'CategProductory Deleted Successfully');
    }
}
