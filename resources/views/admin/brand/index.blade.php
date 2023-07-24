@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Brand Form</h4>
                    <h5> {{ session('message') }}</h5>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{ route('brand.new') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Brand Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="brand Name">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Brand Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="description" id="exampleInputEmail3" placeholder="Descriptin"></textarea>
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
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Brand</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
