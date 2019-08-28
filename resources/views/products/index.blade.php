@extends('layouts.app')



@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Products
        </div>
        <div class="panel-body">
            <div class="row form-group" style="margin-left: 2%;">
                <a class="btn btn-primary" href="{{ route('product.create') }}">Create New</a>
            </div>
            <table class="table table-hover">
                <thead>

                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Trash</th>

                <tbody>
                @if($products->count()>0)

                    @foreach($products as $product)

                        <tr>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td>
                                {{ $product->quantity }}
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('products.edit', ['id'=>$product->id]) }}">Edit</a>
                            </td>

                            <td><a class="btn btn-danger" href="{{ route('products.delete', ['id'=>$product->id]) }}">Delete</a>
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
