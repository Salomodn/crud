@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
      <div class="panel-heading">
      	Create New Order
      </div>

      <div class="panel-body">
      	<form action="{{ route('order.store') }}" method="POST">
            <div class="form-group">
            	<label for="order_number">Order Number</label>
            	<input type="text" name="order_number" placeholder="Enter Order Number" class="form-control">
            </div>

            <div class="form-group">
                <submit></submit> <!-- Include VueJS Component -->
            </div>



      	</form>
      </div>

  </div>

@stop

