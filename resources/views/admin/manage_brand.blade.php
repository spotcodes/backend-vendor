@extends('admin/layout')
@section('page_title','Manage Brand')
@section('brand_select','active')
@section('container')


@error('image')
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
   {{$message}}  
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
   </button>
</div> 
@enderror
    <h1 class="mb10">Manage Brand</h1>
    <a href="{{url('admin/brand')}}">
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
                            <form action="{{route('brand.manage_brand_process')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <label for="color" class="control-label mb-1">Brand </label>
                                            <input id="brand" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            <!---@error('name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}		
                                            </div>
                                            @enderror -->
											<span id="error_slug"></span>
                                        </div> 
                                        <div class="col-lg-142">
                                            <label for="image" class="control-label mb-1"> Show in Home Page</label>
                                            <input id="is_home" name="is_home" type="checkbox" class="form-control" {{$is_home_selected}}>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1"> Image</label>
                                    <input id="fileUpload" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                    <p>Upload an image (.jpg,.jpeg,.png,.gif)</p>
								   @error('image')
                                    <div class="alert alert-danger" role="alert">
                                    {{$message}}		
                                    </div>
                                    @enderror

                                    @if($image!='')
                                        <img width="100px" src="{{asset('storage/media/brand/'.$image)}}"/>
                                    @endif
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

  $('#brand').keyup(function(){
	 var error_slug = '';
	  var brand = $('#brand').val();
	  var _token = $('input[name="_token"]').val();
	   $.ajax({
		url:"{{url('/brand/brandCheck')}}",
		method:"POST",
		data:{brand:brand, _token:_token},
		success:function(result)
			{
			 if(result == 'unique')
			 {
			  $('#error_slug').html('<label class="text-success">Brand Not Available in Database</label>');
			  $('#brand').removeClass('has-error');
			  }
			 else
			 {
			  $('#error_slug').html('<label class="text-danger">Brand Already Available in Database</label>');
			  $('#brand').addClass('has-error');
			 }
			}
	   })
    });
 });
</script> 
@endsection