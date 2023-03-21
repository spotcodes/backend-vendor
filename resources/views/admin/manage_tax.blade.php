@extends('admin/layout')
@section('page_title','Manage Tax')
@section('tax_select','active')
@section('container')
    <h1 class="mb10">Manage Tax</h1>
    <a href="{{url('admin/tax')}}">
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
                                        <form action="{{route('tax.manage_tax_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="size" class="control-label mb-1">Tax Value </label>
                                                <input id="tax_value" value="{{$tax_value}}" name="tax_value" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                <!---@error('tax_value')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror---->
												<span id="error_slug"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="size" class="control-label mb-1">Tax Desc </label>
                                                <input id="tax_desc" value="{{$tax_desc}}" name="tax_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
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

  $('#tax_value').keyup(function(){
	 var error_slug = '';
	  var tax_value = $('#tax_value').val();
	  var _token = $('input[name="_token"]').val();
	   $.ajax({
		url:"{{url('/tax/tax_valueCheck')}}",
		method:"POST",
		data:{tax_value:tax_value, _token:_token},
		success:function(result)
			{
			 if(result == 'unique')
			 {
			  $('#error_slug').html('<label class="text-success">Tax Value Not Available in Database</label>');
			  $('#tax_value').removeClass('has-error');
			  }
			 else
			 {
			  $('#error_slug').html('<label class="text-danger">Tax value Already Available in Database</label>');
			  $('#tax_value').addClass('has-error');
			 }
			}
	   })
    });
 });
</script>                    
@endsection