@extends('front/layout')
@section('page_title','Order Placed')
@section('container')
@php
	$cart = session('cart');
	$cart=json_decode(json_encode($cart),true);
	// print_r($cart);
	$record = getRecord('orders',session('ORDER_ID'));
	$record=json_decode(json_encode($record),true);
	$totalAmt=$record[0]['total_amt']-$record['0']['coupon_value'];
	
@endphp
  <!-- product category -->
<section id="aa-product-category">
   <div class="container">
      <div class="row">
	  <h2>Order Detail</h2>
	  <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your order has been placed. </p>

			<div class="order_placed">
			<div class="order">Order number:&nbsp; <strong>{{session('ORDER_ID')}}</strong></div>
			<div class="order">Date: &nbsp; <strong>{{getCustomDate($record[0]['added_on'])}}</strong></div>
			@if($record[0]['coupon_value'] > 0)
			     <div class="order">Coupon Value: <strong>{{$record[0]['coupon_value']}}</strong></div>
		    @endif
			<div class="order">Total:&nbsp; <strong><span><bdi><span>Rs.&nbsp; </span>{{$totalAmt}}</bdi></span></strong></div>
			<div class="order">Payment Type: &nbsp; <strong>{{$record[0]['payment_type']}}</strong></div>
			</div>
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
             
              <br><br>
               <div class="table-responsive">
			   <h4>Pay with cash upon delivery.</h4>
                  <table class="table">
                    <thead>
                      <tr>
                       
                        <th>Image</th>
                        <th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @php 
                       $total_amt=0;
                      @endphp
                      @foreach($cart as $data)
					  @php
					   $total_amt=$total_amt+($data['price']*$data['qty']);
					  @endphp
                      <tr id="cart_box{{$data['attr_id']}}">

                        <td><img src="{{asset('storage/media/'.$data['image'])}}" alt="img" width="50px"></td>
                        <td>{{$data['name']}}
                        @if($data['size']!='')
                        <br/>SIZE: {{$data['size']}}
                        @endif
                        @if($data['color']!='')
                        <br/>COLOR: {{$data['color']}}
                        @endif
                        </td>
                        <td>Rs {{$data['price']}}</td>
                        <td>{{$data['qty']}}</td>
                        <td id="total_price_{{$data['attr_id']}}">Rs {{$data['price']*$data['qty']}}</td>
                      </tr>
                      @endforeach
					  <tr>
                        <td colspan="3">&nbsp;</td>
                        <td><b>Total</b></td>
                        <td><b>{{$total_amt}}</b></td>
                      </tr>
					  <?php
                      if($record[0]['coupon_value']>0){
                        echo '<tr>
                          <td colspan="3">&nbsp;</td>
                          <td><b>Coupon <span class="coupon_apply_txt">('.$record[0]['coupon_code'].')</span></b></td>
                          <td>'.$record[0]['coupon_value'].'</td>
                        </tr>';
                        $totalAmt=$total_amt-$record[0]['coupon_value'];
                        echo '<tr>
                          <td colspan="3">&nbsp;</td>
                          <td><b>Final Total</b></td>
                          <td>'.$totalAmt.'</td>
                        </tr>';
                      }
                      
                      
                      ?>
                       </tbody>
                  </table>
                </div>
                
             <!-- Cart Total view -->
           
		   </div>
         </div>
       </div>
     </div>
   </div>
</section>
@endsection