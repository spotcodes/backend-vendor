<?php
use Illuminate\Support\Facades\DB;

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();
}

function getTopNavCat(){
    $result=DB::table('categories')
            ->where(['status'=>1])
            ->get();
            $arr=[];
    foreach($result as $row){
        $arr[$row->id]['category_name']=$row->category_name;
        $arr[$row->id]['parent_id']=$row->parent_category_id;
		$arr[$row->id]['category_slug']=$row->category_slug;
    }
    $str=buildTreeView($arr,0);
    return $str;
}

$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($arr as $id=>$data){
		if($parent==$data['parent_id']){
			if($level>$prelevel){
				if($html==''){
					$html.='<ul class="nav navbar-nav">';
				}else{
					$html.='<ul class="dropdown-menu">';
				}
				
			}
			if($level==$prelevel){
				$html.='</li>';
			}
			$url=url("/category/".$data['category_slug']);
			$html.='<li><a href="'.$url.'">'.$data['category_name'].'<span class="caret"></span></a>';
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</li></ul>';
	}
	return $html;
}



function getUserTempId(){
	//if(session()->get('USER_TEMP_ID')===null){
		//$rand=rand(111111111,999999999);
		//session()->put('USER_TEMP_ID',$rand);
		//return $rand;
	//}else{
		//return session()->has('USER_TEMP_ID');
	//}
	if(!session()->has('USER_TEMP_ID')){
		$rand=rand(111111111,999999999);
		session()->put('USER_TEMP_ID',$rand);
		return $rand;
	}else{
		return session()->get('USER_TEMP_ID');
	}
}

function getAddToCartTotalItem(){
	if(session()->has('FRONT_USER_LOGIN')){
		$uid=session()->get('FRONT_USER_ID');
		$user_type="Reg";
	}else{
		$uid=getUserTempId();
		$user_type="Not-Reg";
	}
	$result=DB::table('cart')
            ->leftJoin('products','products.id','=','cart.product_id')
            ->leftJoin('products_attr','products_attr.id','=','cart.product_attr_id')
            ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
            ->leftJoin('colors','colors.id','=','products_attr.color_id')
            ->where(['user_id'=>$uid])
            ->where(['user_type'=>$user_type])
            ->select('cart.qty','products.name','products.image','sizes.size','colors.color','products_attr.price','products.slug','products.id as pid','products_attr.id as attr_id')
            ->get();

	return $result;
   
}
function getAddTowishlistTotalItem(){
	$uid1='';
	$user_type='';
	if(session()->has('FRONT_USER_LOGIN')){
		$uid1=session()->get('FRONT_USER_ID');
		$user_type="Reg";
	}
		$result=DB::table('wishlists')
            ->leftJoin('products','products.id','=','wishlists.product_id')
            ->leftJoin('products_attr','products_attr.id','=','wishlists.product_attr_id')
            ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
            ->leftJoin('colors','colors.id','=','products_attr.color_id')
            ->where(['user_id'=>$uid1])
			->where(['user_type'=>$user_type])
            ->select('wishlists.qty','products.name','products.image','sizes.size','colors.color','products_attr.price','products.slug','products.id as pid','products_attr.id as attr_id')
            ->get();
             return $result;
}

function apply_coupon_code($coupon_code){
	$totalPrice=0;
	$result=DB::table('coupons')  
		->where(['code'=>$coupon_code])
		->get(); 
	
	if(isset($result[0])){
		$value=$result[0]->value;
		$type=$result[0]->type;
		$getAddToCartTotalItem=getAddToCartTotalItem();
		
		foreach($getAddToCartTotalItem as $list){
			$totalPrice=$totalPrice+($list->qty*$list->price);
		}  
		if($result[0]->status==1){
			if($result[0]->is_one_time==1){
				$status="error";
				$msg="Coupon code already used";    
			}else{
				$min_order_amt=$result[0]->min_order_amt;
				if($min_order_amt>0){
						
					if($min_order_amt<$totalPrice){
						$status="success";
						$msg="Coupon code applied";
					}else{
						$status="error";
						$msg="Cart amount must be greater then $min_order_amt";
					}
				}else{
						$status="success";
						$msg="Coupon code applied";
				}
			}
		}else{
			$status="error";
			$msg="Coupon code deactivated";   
		}
		
	}else{
		$status="error";
		$msg="Please enter valid coupon code";
	}
	
	$coupon_code_value=0;
	if($status=='success'){
		if($type=='Value'){
			$coupon_code_value=$value;
			$totalPrice=$totalPrice-$value;
		}if($type=='Per'){
			$newPrice=($value/100)*$totalPrice;
			$totalPrice=round($totalPrice-$newPrice);
			$coupon_code_value=$newPrice;
		}
	}

	return json_encode(['status'=>$status,'msg'=>$msg,'totalPrice'=>$totalPrice,'coupon_code_value'=>$coupon_code_value]);
}
function getCustomDate($date){
	if($date!=''){
		$date=strtotime($date);
		return date('d-M Y',$date);
	}
}
function sendmail($email,$html)
{
		//print_r($req->email);die;
		 
        try {
        $mail->isSMTP(); 
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth   = true; 
        $mail->Username   = 'basantkumar159@gmail.com'; // SMTP username
        $mail->Password   = 'qvcyjhslbhrdmzvv'; // SMTP password
        $mail->SMTPSecure = 'TLS'; 
        
        $mail->Port = 587;  
        $mail->setFrom('basantkumar159@gmail.com', 'Web_ecom');
        $mail->setFrom('sender-from-email', 'sender-from-name');
        $mail->addAddress($email);
            // $mail->addCC("");
            // $mail->addBCC("");

            $mail->addReplyTo('sender-reply-email', 'sender-reply-name');

            $mail->isHTML(true);  // Set email content format to HTML

            $mail->Subject = "Order Item";
           // $html = "Hello Check Example here";
            $mail->Body = $html;
          //  print_r($mail);die;
            if( !$mail->send() ) {
                return "email not sent";
            }            
            else {
                return "successEmail has been sent.";
            }

        } catch (Exception $e) {
             return "error,Message could not be sent.";
        }
	}
	
	function getRecord($table,$id){
	  /* $result=DB::table($table)->where(['id'=>$id])->value('name');
       return $result;  */
	   $result=DB::table($table)->where(['id'=>$id]) ->get();
       return $result;
    }
    
	function getRecordId($table,$column,$name){
	  /* $result=DB::table($table)->where(['id'=>$id])->value('name');
       return $result;  */
	   $result=DB::table($table)->where([$column=>$name])->get();
       return $result[0]->id;
    }
	function isAdmin1(){
		if(session()->get('ADMIN_ROLE')==1)
		{
		?>
			<script>window.location.href="{{url('/admin/product')}}"</script>
	     <?php
		}
	 }

	 function isAdmin(){
		if(session()->get('ADMIN_ROLE')==1)
		{
			return redirect('admin/product');
			//die();
	    }
	}
	
	function getAvaliableQty($product_id,$attr_id){
	$result=DB::table('orders_details')
            ->leftJoin('orders','orders.id','=','orders_details.orders_id')
			->leftJoin('products_attr','products_attr.id','=','orders_details.products_attr_id')
            ->where(['orders_details.product_id'=>$product_id])
            ->where(['orders_details.products_attr_id'=>$attr_id])
            ->select('orders_details.qty','products_attr.qty as pqty')
            ->get();

	return $result;
}
?>