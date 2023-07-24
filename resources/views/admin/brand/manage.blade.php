@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Brands</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <h5 class="text-center text-success"> {{ Session::get('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Brand Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->description }}</td>
                                <td>
                                    <img  src="{{ asset($brand->image) }}" alt="{{ $brand->name }}" height="100px">
                                </td>
                                <td>{{ $brand->status ==1 ? 'published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('brand.edit',['id'=>$brand->id]) }}" class="btn btn-success ti-agenda"></a>
                                    <a href="{{ route('brand.delete',['id'=>$brand->id]) }}" onclick="return confirm('Are You Sure to want to Delete?')"   class="btn btn-danger ti-trash"></a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
