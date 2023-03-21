@extends('admin/layout')
@section('page_title','Manage Size')
@section('size_select','active')
@section('container')
    <h1 class="mb10">Manage Size</h1>
    <a href="{{url('admin/size')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('size.manage_size_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="size" class="control-label mb-1">Size </label>
                                                <input id="size" value="{{$size}}" name="size" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                               <!--- @error('size')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror--->
												<span id="error_slug"></span>
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Submit
                                                </button>
                                            </div>
                                            <input type="hidden" name="id" value="{{$id}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                           
                            
                            
                            
                            
                        </div>
                        
        </div>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script>
$(document).ready(function(){

  $('#size').keyup(function(){
	 var error_slug = '';
	  var size = $('#size').val();
	  var _token = $('input[name="_token"]').val();
	   $.ajax({
		url:"{{url('/size/sizeCheck')}}",
		method:"POST",
		data:{size:size, _token:_token},
		success:function(result)
			{
			 if(result == 'unique')
			 {
			  $('#error_slug').html('<label class="text-success">Size Not Available in Database</label>');
			  $('#size').removeClass('has-error');
			  }
			 else
			 {
			  $('#error_slug').html('<label class="text-danger">Size Already Available in Database</label>');
			  $('#size').addClass('has-error');
			 }
			}
	   })
    });
 });
</script>                
@endsection