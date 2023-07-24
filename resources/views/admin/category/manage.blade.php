@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <h5 class="text-center text-success"> {{ Session::get('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <img  src="{{ asset($category->image) }}" alt="{{ $category->name }}" height="100px">
                                </td>
                                <td>{{ $category->status ==1 ? 'published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-success ti-agenda"></a>
                                    <a href="{{ route('category.delete',['id'=>$category->id]) }}" onclick="return confirm('Are You Sure to want to Delete?')"   class="btn btn-danger ti-trash"></a>
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
