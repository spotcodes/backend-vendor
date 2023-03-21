@extends('admin/layout')
@section('page_title','Order')
@section('order_select','active')
@section('container')
<div class="row justify-content-start">
    <div class="col-8">
         <h4 class="mb">Order</h4>
	</div>
	<!----
	 <div class="col-4">
         <span data-href="{{url('admin/export-csv')}}" id="export" class="btn btn-success btn-sm" onclick ="exportTasks (event.target);">Export Csv</span>&nbsp;&nbsp;
         <div class="card-body">
         <form action="{{ url('admin/import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import Users</button>
            <a class="btn btn-success" href="{{ url('export-users') }}">Export Users</a>
        </form>
            </div>
	</div>
	
	----->
</div>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table  table-data3 table-striped display" id="example" width="100%">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Details</th>
                            <th>Amt</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Payment Type</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $list)
                        <tr>
                            <td class="order_id_btn"><a href="{{url('/admin/order_detail')}}/{{$list->id}}">{{$list->id}}</a></td>
                            <td>
                            {{$list->name}}<br/>
                            {{$list->email}}<br/>
                            {{$list->mobile}}<br/>
                            {{$list->address}},{{$list->city}},{{$list->state}},{{$list->pincode}}
                            </td>
                            <td>{{$list->total_amt}}</td>
                            <td>{{$list->orders_status}}</td>
                            <td>{{$list->payment_status}}</td>
                            <td>{{$list->payment_type}}</td>
                            <td>{{$list->added_on}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
				<!---
				 {{-- Pagination --}}
				 <div class="d-flex justify-content-center">
				     
				 </div>
				 -->
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection