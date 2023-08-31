@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Unit Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <h5 class="text-center text-success"> {{ Session::get('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Unit Name</th>
                                <th>Unit Code</th>
                                <th>Unit Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $unit->name }}</td>
                                <td>{{ $unit->code }}</td>
                                <td>{{ $unit->description }}</td>
                                <td>
                                    <img  src="{{ asset($unit->image) }}" alt="{{ $unit->name }}" height="100px">
                                </td>
                                <td>{{ $unit->status ==1 ? 'published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('unit.edit',['id'=>$unit->id]) }}" class="btn btn-success ti-agenda"></a>
                                    <a href="{{ route('unit.delete',['id'=>$unit->id]) }}" onclick="return confirm('Are You Sure to want to Delete?')"   class="btn btn-danger ti-trash"></a>
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
