@extends('admin/layout')
@section('page_title','Order Vendor')
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
                <form action=""
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file"
                           class="form-control">
                    <br>
                    <button class="btn btn-success">
                          Import User Data
                       </button>
                    <a class="btn btn-warning"
                       href="">
                              Export User Data
                      </a>
                </form>
            </div>
	</div>
	--->
</div>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Details</th>
							<th>Product</th>
                            <th>QTY</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Payment Type</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
					      @php
						  $i=1;
						  @endphp
                        @foreach($orders_details as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                            {{$list->name}}<br/>
                            {{$list->email}}<br/>
                            {{$list->mobile}}<br/>
                            {{$list->address}},{{$list->city}},{{$list->state}},{{$list->pincode}}
                            </td>
							<td>{{$list->pname}}</td>
                            <td>{{$list->qty}}</td>
                            <td>{{$list->orders_status}}</td>
                            <td>{{$list->payment_status}}</td>
                            <td>{{$list->payment_type}}</td>
                            <td>{{$list->added_on}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection