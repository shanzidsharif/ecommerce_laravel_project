<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index');
    }

    public function create(Request $request)

    {
//            DB::table('categories')->insert([
//                'name'=> $request->name,
//                'description'=> $request->description,
//                'image'=> $request->image,
//                'status'=> $request->status,
//            ]);
        Unit::newUnit($request);
        return back()->with('message', 'Successfully Created');
    }
    public function manage()
    {
        return view('admin.unit.manage',[
            'units' => Unit::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.unit.edit',[
            'unit' => Unit::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        Unit::updateunit($request, $id);
//        return redirect('admin.unit.add')->with('message','Info Updated Successfully');
        return redirect('unit/manage')->with('message', 'successfully Updated');
    }
    public function delete($id)
    {
        Unit::deleteCategory($id);
        return redirect('unit/manage')->with('message', 'unit Deleted Successfully');
    }
}
