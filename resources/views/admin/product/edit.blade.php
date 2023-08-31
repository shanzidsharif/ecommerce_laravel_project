@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Product Form</h4>
                    <h5> {{ session('message') }}</h5>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{ route('product.update',['id'=> $product->id]) }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" id="categoryId">
                                    <option class="text-center" value=""disabled selected>-- Select Category --</option>
                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}" {{ $category->id == $product->category_id ? 'selected': '' }}>{{$category->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Sub Category Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sub_category_id" id="subCategoryId" >
                                    <option class="text-center" value=""disabled selected>-- Select Category --</option>
                                    @foreach($sub_categories as $sub_category)

                                        <option value="{{$sub_category->id}}" {{ $sub_category->id == $product->sub_category_id ? 'selected': '' }}>{{$sub_category->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Brand Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="brand_id">
                                    <option class="text-center" value=""disabled selected>-- Select Brand --</option>
                                    @foreach($brands as $brand)

                                        <option value="{{$brand->id}}" {{ $brand->id == $product->brand_id ? 'selected': '' }}>{{$brand->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Unit Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="unit_id">
                                    <option class="text-center" value=""disabled selected>-- Select Unit --</option>
                                    @foreach($units as $unit)

                                        <option value="{{$unit->id}}" {{ $unit->id == $product->unit_id ? 'selected': '' }}>{{$unit->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}"  id="" placeholder="Product Name">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Code <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="code" value="{{ $product->code }}" id="" placeholder="Product Code">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Stock Amount <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="stock_amount" value="{{ $product->stock_amount }}" id="" placeholder="Product Stock Amount">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Model <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="model" value="{{ $product->model }}" id="" placeholder="Product Model">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Price <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="regular_price" value="{{ $product->regular_price }}" id="" placeholder="Product Model">
                                    <input type="number" class="form-control" name="selling_price"  value="{{ $product->selling_price }}" id="" placeholder="Product Model">

                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Short Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="short_description" id="exampleInputEmail3" placeholder="Short Description">{{ $product->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail31" class="col-sm-3 control-label">Long Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control summernote" name="long_description" id="exampleInputEmail31" placeholder="Long Description">{{ $product->long_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Feature Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="input-file-now" class="dropify" accept="image/*"/>
                                <img src="{{ asset($product->image) }}" name="image" alt="" height="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Other Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="other_image[]" id="input-file-now" class="dropify" multiple accept="image/*" />
                                @foreach($product->otherImage as $image)
                                    <img src="{{ asset($image->image) }}" name="other_image[]" alt="" height="100">

                                @endforeach
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Publication Status</label>
                            <div class="form-label col-sm-9">
                                <label class="me-3"><input type="radio" name="status"{{ $product->status == 1 ? 'checked': '' }} value="1"  >Published</label>
                                <label><input type="radio" name="status" {{ $product->status == 2 ? 'checked': '' }} value="2" >Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

