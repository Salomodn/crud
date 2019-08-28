@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
      <div class="panel-heading">
      	Create New Supplier
      </div>

      <div class="panel-body">
      	<form action="{{ route('supplier.store') }}" method="POST">
      		
      		 <div class="form-group">
            	<label for="name">Name</label>
            	<input type="text" name="name" placeholder="Enter Name" class="form-control">
            </div>


            <div class="form-group">
                <submit></submit> <!-- Include VueJS Component -->
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
