@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Sub Category Form</h4>
                    <h5> {{ session('message') }}</h5>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{ route('sub-category.new') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option class="text-center" value=""disabled selected>-- Select Category --</option>
                                @foreach($categories as $category)

                                    <option value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Sub Category Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="" placeholder="Category Name">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="description" id="exampleInputEmail3" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Publication Status</label>
                            <div class="form-label col-sm-9">
                                <label class="me-3"><input type="radio" name="status" value="1" checked >Published</label>
                                <label><input type="radio" name="status" value="2" >Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Sub Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
