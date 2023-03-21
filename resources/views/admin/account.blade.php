@extends('admin/layout')
@section('page_title','Account')
@section('category_select','active')
@section('container')
<div class="card">
    <div class="card-header">
        <strong>Normal</strong> Form
    </div>
    <div class="card-body card-block">
        <form action="" method="post" class="" id="frmEmailChange">
        @csrf
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter Email.." class="form-control"  value="@if($data[0]->id) {{$data[0]->email}} @else{{old('email')}}@endif">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}		
                    </div>
                 @enderror
            </div>
            <div class="form-group">
                <label for="nf-password" class=" form-control-label">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password.." class="form-control" value="">
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}		
                    </div>
                 @enderror
            </div>
            <div class="form-group">
                <label for="nf-password" class=" form-control-label">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Password.." class="form-control" value="">
                @error('confirm_password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}		
                    </div>
                 @enderror
            </div>
            <br><br>
              <div id="emailChange"></div>
       
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" id="btnEmailChange">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
    </form>
</div>
@endsection
