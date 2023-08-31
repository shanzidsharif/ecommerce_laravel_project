@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Information</h4>
                    <h6 class="card-subtitle">Product Details</h6>
                    <h5 class="text-center text-success"> {{ Session::get('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table  class="table table-striped border">
                            <tr>
                                <th>Product Id</th>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $product->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Sub Category</th>
                                <td>{{ $product->subCategory->name }}</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>{{ $product->brand->name }}</td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td>{{ $product->unit->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Model</th>
                                <td>{{ $product->model }}</td>
                            </tr>
                            <tr>
                                <th>Stock Amount</th>
                                <td>{{ $product->stock_amount }}</td>
                            </tr>
                            <tr>
                                <th>Regular Price</th>
                                <td>{{ $product->regular_price }}</td>
                            </tr>
                            <tr>
                                <th>Selling Price</th>
                                <td>{{ $product->selling_price }}</td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td>
                                    <img src="{{ asset($product->image) }}" alt="" height="100px">
                                </td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>
                                    {{ $product->short_description }}
                                </td>
                            </tr>
                            <tr>
                                <th>Long Description</th>
                                <td>
                                    {!! $product->long_description !!}

                                </td>
                            </tr>
                            <tr>
                                <th>Product Other Images</th>
                                <td>
                                    @foreach($product->otherImage as $other)
                                        <img src="{{ asset($other->image) }}" alt="" height="100px">

                                    @endforeach
                                </td>
                            </tr>
                                <th>Hit Count</th>
                                <td>{{ $product->hit_count }}</td>
                            </tr>
                            <tr>
                                <th>Sales Count</th>
                                <td>{{ $product->sales_count }}</td>
                            </tr>
                            <tr>
                                <th>Feature Count</th>
                                <td>{{ $product->feature_status == 1 ? 'Featured': 'Not Featured'}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

