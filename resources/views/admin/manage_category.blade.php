@extends('admin/layout')
@section('page_title','Manage Category')
@section('category_select','active')
@section('container')
    <h1 class="mb10">Manage Category</h1>
    <a href="{{url('admin/category')}}">
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
                            <form action="{{route('category.manage_category_process')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="category_name" class="control-label mb-1">Category Name</label>
                                            <input id="category_name" value="@if($id) {{$category_name}} @else{{old('category_name')}}@endif" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            @error('category_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}		
                                            </div>
                                        @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="category_name" class="control-label mb-1">Parent  Category</label>
                                            <select id="parent_category_id" name="parent_category_id" class="form-control" required>
                                            <option value="0">Select Categories</option>
                                            @foreach($category as $list)
                                            @if($parent_category_id==$list->id)
                                            <option selected value="{{$list->id}}">
                                                @else
                                            <option value="{{$list->id}}">
                                                @endif
                                                {{$list->category_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                            <input id="category_slug" value="@if($id) {{$category_slug}} @else{{old('category_slug')}}@endif" name="category_slug" onKeyPress="return ValidateAlpha(event);" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            @error('category_slug')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror 
                                            <span id="error_slug"></span>

                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1"> Image</label>
                                    <input id="fileUpload" name="category_image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                     <p>Upload an image (.jpg,.jpeg,.png,.gif)</p>
								    @error('category_image')
                                    <div class="alert alert-danger" role="alert">
                                    {{$message}}		
                                    </div>
                                    @enderror

                                    @if($category_image!='')
                                            <a href="{{asset('storage/media/category/'.$category_image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/category/'.$category_image)}}"/></a>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1"> Show in Home Page</label>
                                    <input id="is_home" name="is_home" type="checkbox" {{$is_home_selected}}>
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

  $('#category_slug').keyup(function(){
      var error_slug = '';
	  var slug = $('#category_slug').val();
	  var _token = $('input[name="_token"]').val();
	   $.ajax({
		url:"{{url('/category/slugCheck')}}",
		method:"POST",
		data:{slug:slug, _token:_token},
		success:function(result)
			{
			 if(result == 'unique')
			 {
			  $('#error_slug').html('<label class="text-success">Slug Not Available in Database</label>');
			  $('#category_slug').removeClass('has-error');
			  }
			 else
			 {
			  $('#error_slug').html('<label class="text-danger">Slug already in Database</label>');
			  $('#category_slug').addClass('has-error');
			 }
			}
	   })
    });
 });     
 </script>              
@endsection