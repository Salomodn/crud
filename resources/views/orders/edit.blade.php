@extends('layouts.app')


@section('content')

     
     

<div class="panel panel-default">
      <div class="panel-heading">
      	Edit  Order : {{$orders->order_number}}
      </div>

      <div class="panel-body">
      	<form action="{{ route('orders.update',['id'=>$orders->id]) }}" method="POST" enctype="multipart/form-data">
      		
      		

            <div class="form-group">
            	<label for="title">Order Number</label>
            	<input type="text" name="order_number" value="{{ $orders->order_number }}" placeholder="Enter Order Number" class="form-control">
            </div>
            <div class="from-group">
            	 <div class="text-right">
            	 	<button class="btn btn-success" type="submit">Update</button>
            	 </div>
            </div>



      	</form>
      </div>

  </div>



@stop


@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">

@stop




@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<script>
  
  $(document).ready(function() {
  $('#body').summernote();
});

</script>

@stop
