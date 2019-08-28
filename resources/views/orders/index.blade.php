@extends('layouts.app')



@section('content')




	 <div class="panel panel-default">
		 <div class="panel-heading">
			 Orders
		 </div>
	 	<div class="panel-body">
            <div class="row form-group" style="margin-left: 2%;">
                <a class="btn btn-primary" href="{{ route('order.create') }}">Create New</a>
            </div>
			<table class="table table-hover">
		 		<thead>


					<th>Order Number</th>
					<th>Edit</th>
					<th>Trash</th>

					<tbody>
                       @if($orders->count()>0)

						 @foreach($orders as $order)

			              <tr>
			              	<td>
			              	      {{ $order->order_number }}
			              	</td>
			              	 <td>
			              	 	<a class="btn btn-primary" href="{{ route('orders.edit', ['id'=>$order->id]) }}">Edit</a>
			              	 </td>

			              	 <td><a class="btn btn-danger" href="{{ route('orders.delete', ['id'=>$order->id]) }}">Delete</a></td>

			              </tr>
			             

						 @endforeach

                          @else

                          <tr>
                          	<th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">Order Create Not yet</th>
                          </tr>

                          @endif

					</tbody>
				</thead>
			</table>
	 	</div>
	 </div>
	

@stop
