@extends('admin/layout')
@section('page_title','Manage Color')
@section('color_select','active')
@section('container')
    <h1 class="mb10">Manage Color</h1>
    <a href="{{url('admin/color')}}">
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
                                        <form action="{{route('color.manage_color_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="color" class="control-label mb-1">Color </label>
                                                <input id="color" value="{{$color}}" name="color" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                <!----@error('color')
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

  $('#color').keyup(function(){
	 var error_slug = '';
	  var color = $('#color').val();
	  var _token = $('input[name="_token"]').val();
	   $.ajax({
		url:"{{url('/color/colorCheck')}}",
		method:"POST",
		data:{color:color, _token:_token},
		success:function(result)
			{
			 if(result == 'unique')
			 {
			  $('#error_slug').html('<label class="text-success">Color Not Available in Database</label>');
			  $('#color').removeClass('has-error');
			  }
			 else
			 {
			  $('#error_slug').html('<label class="text-danger">Color Already Available in Database</label>');
			  $('#color').addClass('has-error');
			 }
			}
	   })
    });
 });
</script>                    
@endsection