<?php
public function place_order1(Request $request){
        if($request->session()->has('FRONT_USER_ID'))
        {
           $uid=$request->session()->get('FRONT_USER_ID');
           if($request->coupon_code!='')
           {
                $arr=apply_coupon_code($request->coupon_code);
                $arr=json_decode($arr,true);
                if($arr['status']=='success'){
                    $coupon_value=$arr['coupon_code_value'];
                }else{
                    return response()->json(['status'=>'false','msg'=>$arr['msg']]);
            }
           }
        //    $arr=[
        //     "customers->id"=>$uid,
        //     "name"=>$request->name,
        //     "email"=>$request->email,
        //     "mobile"=>$rquest->mobile,
        //     "address"=>$request->address,
        //     "city"=>$request->city,
        //     "state"=>$request->state,
        //     "pincode"=>$request->zip,
        //     "coupon_code"=>$request->coupon_code,
        //     "payment_type"=>$request->payment_type,
        //     "payment_status"=>'Pending',
        //     "order_status"=>1,
        //     "add_on"=>date('Y-m-s h:i:s')
        //    ];
            $uid=$request->session()->get('FRONT_USER_ID');
            $current = Carbon::now();
            $totalPrice=0;
            $getAddToCartTotalItem=getAddToCartTotalItem();
           // $productDetailArr=[];
            //$i=0;
            foreach($getAddToCartTotalItem as $key=>$list)
             {
                $totalPrice=$totalPrice+($list->qty*$list->price);
                // $productDetailArr[$i]['product_id']=$list->pid;
                // $productDetailArr[$i]['products_attr_id']=$list->attr_id;
                // $productDetailArr[$i]['price']=$list->price;
                // $productDetailArr[$i]['qty']=$list->qty;
                // $i++;
            }
            
            unset($request['_token']);
            $data=array();
            $data=$request->all();
            $data['customers_id']=$uid;
            $data['payment_status']='Pending';
            $data['order_status']=1;
            $data['coupon_value']=$coupon_value;
            $data['total_amt']=$totalPrice;
            $data['added_on']=date('Y-m-d h:i:s');
            $data['customers_id']=$uid;
           // prx($data);
           $orders_id=DB::table('orders')->insertGetId($data);
           if($orders_id>0)
           {
                foreach($getAddToCartTotalItem as $key=>$list)
                {
                    
                    $productDetailArr['product_id']=$list->pid;
                    $productDetailArr['products_attr_id']=$list->attr_id;
                    $productDetailArr['price']=$list->price;
                    $productDetailArr['qty']=$list->qty;
                    $productDetailArr['orders_id']=$orders_id;
                    DB::table('orders_details')->insert($productDetailArr);
                }
             DB::table('cart')->where('user_id',$uid)->where('user_type','Reg')->delete();
             $request->session()->put('ORDER_ID',$orders_id);
             $status='success';
             $msg='Order Placed';
           }
           else{
                $status='false';
                $msg='Please try after sometime';
           }
            
        }
        else{
              $status="false";
              $msg="Please Login to Place Order";
        }
       return response()->json(['status'=>$status,'msg'=>$msg]);

    }