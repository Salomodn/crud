@extends('layouts.app')


@section('content')


<div class="panel panel-default">
      <div class="panel-heading">
      	Create New Product
      </div>

      <div class="panel-body">
      	<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
      		
      		<div class="form-group">
            	<label for="name">Name</label>
            	<input type="text" name="name" placeholder="Enter Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">Description</label>
                <textarea name="description" cols="50" rows="5" placeholder="Enter Description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control">
            </div>

            <div class="form-group">
                <submit></submit> <!-- Include VueJS Component -->
            </div>



      	</form>
      </div>

  </div>

@stop

