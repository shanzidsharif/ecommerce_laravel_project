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
                                <th>Name</th>
                                <th>Category</th>
                                <th>Stock Amount</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->stock_amount }}</td>
                                    <td>
                                        <img  src="{{ asset($product->image) }}" alt="{{ $product->name }}" height="100px">
                                    </td>
                                    <td>{{ $product->status ==1 ? 'published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('product.detail',['id'=>$product->id]) }}" class="btn btn-info ti-agenda"></a>
                                        <a href="{{ route('product.edit',['id'=>$product->id]) }}" class="btn btn-success ti-agenda"></a>
                                        <a href="{{ route('product.delete',['id'=>$product->id]) }}" onclick="return confirm('Are You Sure to want to Delete?')"   class="btn btn-danger ti-trash"></a>
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

