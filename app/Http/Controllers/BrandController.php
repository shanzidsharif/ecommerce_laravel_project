<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
    }

    public function create(Request $request)

    {
//            DB::table('categories')->insert([
//                'name'=> $request->name,
//                'description'=> $request->description,
//                'image'=> $request->image,
//                'status'=> $request->status,
//            ]);
        Brand::newBrand($request);
        return back()->with('message', 'Successfully Created');
    }
    public function manage()
    {
        return view('admin.brand.manage',[
            'brands' => Brand::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.brand.edit',[
            'brand' => Brand::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
//        return redirect('admin.brand.add')->with('message','Info Updated Successfully');
        return redirect('brand/manage')->with('message', 'successfully Updated');
    }
    public function delete($id)
    {
        Brand::deleteCategory($id);
        return redirect('brand/manage')->with('message', 'brand Deleted Successfully');
    }
}
