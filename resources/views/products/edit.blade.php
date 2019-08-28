@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
      <div class="panel-heading">
      	Edit  Product : {{$products->name}}
      </div>

      <div class="panel-body">
      	<form action="{{ route('products.update',['id'=>$products->id]) }}" method="POST">
      		<div class="form-group">
            	<label for="title">Name</label>
            	<input type="text" name="name" value="{{ $products->name }}" placeholder="Enter Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Description</label>
                <textarea name="description" cols="50" rows="5" placeholder="Enter Description" class="form-control">{{ $products->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Quantity</label>
                <input type="text" name="quantity" value="{{ $products->quantity }}" placeholder="Enter Quantity" class="form-control">
            </div>
            <div class="form-group">
                <submit action="Update"></submit>
            </div>
        </form>
      </div>

  </div>



@stop


