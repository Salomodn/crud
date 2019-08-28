@extends('layouts.app')



@section('content')




    <div class="panel panel-default">
        <div class="panel-heading">
            Suppliers
        </div>
        <div class="panel-body">
            <div class="row form-group" style="margin-left: 2%;">
                <a class="btn btn-primary" href="{{ route('supplier.create') }}">Create New</a>
            </div>
            <table class="table table-hover">
                <thead>


                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Trash</th>

                <tbody>
                @if($suppliers->count()>0)

                    @foreach($suppliers as $supplier)

                        <tr>
                            <td>
                                {{ $supplier->name }}
                            </td>
                            <td>
                                {{ $supplier->description }}
                            </td>
                            <td>
                                {{ $supplier->quantity }}
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('suppliers.edit', ['id'=>$supplier->id]) }}">Edit</a>
                            </td>

                            <td><a class="btn btn-danger" href="{{ route('suppliers.delete', ['id'=>$supplier->id]) }}">Delete</a>
                            </td>

                        </tr>


                    @endforeach

                @else

                    <tr>
                        <th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">Post
                            Create Not yet
                        </th>
                    </tr>

                @endif

                </tbody>
                </thead>
            </table>
        </div>
    </div>


@stop
