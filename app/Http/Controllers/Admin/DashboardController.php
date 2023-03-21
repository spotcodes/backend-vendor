<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Models\Admin\Customer;
use App\Models\Admin\Order;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Product_review;
use Carbon\Carbon;
class DashboardController extends Controller
{
	protected $page_name = 'Dashboard';
    public function dashboard(){
    	if(session()->get('ADMIN_ROLE')==1)
		{
			return redirect('admin/product');
	    }
        $page_name = 'Dashboard';
        $totalProducts= Product::count();
        $totalCategory= Category::count();
        $totalBrand= Brand::count();
        $todayDate=Carbon::now()->format('Y-m-d');
        $thisMonth=Carbon::now()->format('m');
        $thisYear=Carbon::now()->format('Y');
        $totalOrder=Order::count();
        $totalreview=Product_review::count();
        $totalCountVendor= DB::table('admins')->where(['role'=>1])->count();
        
        $todayOrder=Order::whereDate('added_on',$todayDate)->count();
        $thisMonthOrder=Order::whereMonth('added_on',$thisMonth)->count();
        $thisYearOrder=Order::whereYear('added_on',$thisYear)->count();
       // print_r($todayDate);die();
        $users= customer::all();
        $current_users = DB::table("customers")
                   ->whereRaw('MONTH(created_at) = ?',[$thisMonth])
                   ->get();
        $activeUsers = customer::where('status','1')->get();

        $totalusers=Customer::select(DB::raw("count('*') as count"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');
        //print_r($user);
        $userMonths=Customer::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');

                $data=array(0,0,0,0,0,0,0,0,0,0,0,0);
                foreach($userMonths as $key=>$month)
                {
                   $data[$month]=$totalusers[$key];
                   
                }
         //prx($data);
        $user=Order::select(DB::raw("count('*') as count"))
        ->whereYear('added_on',date('Y'))
        ->groupBy(DB::raw("Month(added_on)"))
        ->pluck('count');
        //print_r($user);
        $months=Order::select(DB::raw("Month(added_on) as month"))
                ->whereYear('added_on',date('Y'))
                ->groupBy(DB::raw("Month(added_on)"))
                ->pluck('month');
              // prx($months);
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $key=>$month)
        {
           $datas[$month]=$user[$key];
           
        }

        $review = DB::table('product_reviews')
                      ->select(DB::raw('COUNT(*) as count,rating'))
                      ->groupBy('rating')
                      ->orderBy('rating','desc')
                      ->pluck('rating');
             // prx($review);
      $ratings=array('100'=>5,'80'=>4,'60'=>3,'40'=>2,'20'=>1);
               $rating=array();
               foreach($review as $key=>$rev)
                  {
                     foreach($ratings as $key1=>$rat)
                     {
                        if($rev==$rat)
                        {
                           $rating[$key]= $key1;
                        }
                     }
                  } 
      $dataPi =DB::table('product_reviews')
                   ->select(DB::raw('COUNT(*) as count,rating'))
                   ->whereMonth('added_on', date('m'))
                  ->groupBy('rating')
                  ->get();
        return view('admin.dashboard',compact('totalCountVendor','users','current_users','activeUsers','page_name','totalProducts','totalCategory','totalBrand','totalOrder','totalreview','todayOrder','thisMonthOrder','thisYearOrder','datas','data','rating','review','dataPi'));
       // return view('admin.dashboard');
    }
       



    public function dashboard_vendor(){
    	
        $page_name = 'Dashboard';
        $totalProducts= DB::table('products')->where(['added_by'=>session()->get('ADMIN_ID')])->count();
        $totalCategory= Category::count();
        $totalBrand= Brand::count();
        $todayDate=Carbon::now()->format('Y-m-d');
        $thisMonth=Carbon::now()->format('m');
        $thisYear=Carbon::now()->format('Y');
        
        $totalreview=DB::table('product_reviews')
        ->leftJoin('customers','customers.id','=','product_reviews.customer_id')
        ->leftJoin('products','products.id','=','product_reviews.products_id')
        ->orderBy('product_reviews.added_on','desc')
        ->select('product_reviews.id','product_reviews.rating','product_reviews.review','product_reviews.added_on','customers.name','products.name as pname','product_reviews.status')
        ->where(['products.added_by'=>session()->get('ADMIN_ID')])->count();
        
       
       
        $totalOrder=DB::table('orders_details')
                  ->Join('products','products.id','=','orders_details.product_id')
                  ->where(['products.added_by'=>session()->get('ADMIN_ID')])->count();
        
        
         
        $todayOrder=DB::table('orders_details')
         ->Join('orders','orders.id','=','orders_details.orders_id')
         ->Join('products','products.id','=','orders_details.product_id')
         ->where(['products.added_by'=>session()->get('ADMIN_ID')])
         ->whereDate('orders.added_on',$todayDate)->count();
        
         $thisMonthOrder=DB::table('orders_details')
        ->Join('orders','orders.id','=','orders_details.orders_id')
        ->Join('products','products.id','=','orders_details.product_id')
        ->where(['products.added_by'=>session()->get('ADMIN_ID')])
        ->whereMonth('orders.added_on',$thisMonth)->count();
        
        $thisYearOrder=DB::table('orders_details')
        ->leftJoin('orders','orders.id','=','orders_details.orders_id')
        ->leftJoin('products','products.id','=','orders_details.product_id')
        ->where(['products.added_by'=>session()->get('ADMIN_ID')])
        ->whereYear('orders.added_on',$thisYear)->count();
       // print_r($todayDate);die();
        $users= customer::all();
        $current_users = DB::table("customers")
                   ->whereRaw('MONTH(created_at) = ?',[$thisMonth])
                   ->get();
        $activeUsers = customer::where('status','1')->get();

        $totalusers=Customer::select(DB::raw("count('*') as count"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');
        //print_r($user);
        $userMonths=Customer::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');

                $data=array(0,0,0,0,0,0,0,0,0,0,0,0);
                foreach($userMonths as $key=>$month)
                {
                   $data[$month]=$totalusers[$key];
                   
                }
         //prx($data);
         $user=Order::select(DB::raw("count('*') as count"))
         ->Join('orders_details','orders.id','=','orders_details.orders_id')
         ->Join('products','products.id','=','orders_details.product_id')
         ->whereYear('orders.added_on',date('Y'))
         ->groupBy(DB::raw("Month(added_on)"))
         ->where(['products.added_by'=>session()->get('ADMIN_ID')])
         ->pluck('count');
       // print_r($user);
       // die();
        $months=Order::select(DB::raw("Month(added_on) as month"))
        ->Join('orders_details','orders.id','=','orders_details.orders_id')
        ->Join('products','products.id','=','orders_details.product_id')
        ->whereYear('orders.added_on',date('Y'))
        ->groupBy(DB::raw("Month(added_on)"))
        ->where(['products.added_by'=>session()->get('ADMIN_ID')])
        ->pluck('month');
      // prx($months);
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $key=>$month)
        {
           $datas[$month]=$user[$key];
           
        }
        $query1 = Product_review::select(DB::raw("count(*) as count,rating"))
               ->leftJoin('products', 'products.id', '=', 'product_reviews.products_id')
               ->leftJoin('customers','customers.id','=','product_reviews.customer_id')
               ->groupBy('product_reviews.rating')
               ->orderBy('product_reviews.id', 'asc')
               ->where('products.added_by', '=', '"'.session()->get('ADMIN_ID').'"')
               ->pluck('product_reviews.count');
              // ->get('id','rating');
              $review = DB::table('product_reviews')
                      ->select(DB::raw('COUNT(*) as count,rating'))
                      ->leftJoin('products', 'products.id', '=', 'product_reviews.products_id')
                      ->leftJoin('customers','customers.id','=','product_reviews.customer_id')
                      ->groupBy('product_reviews.rating')
                      ->orderBy('product_reviews.rating','desc')
                      ->where(['products.added_by'=>session()->get('ADMIN_ID')])
                      ->pluck('products.rating');
               $ratings=array('100'=>5,'80'=>4,'60'=>3,'40'=>2,'20'=>1);
               $rating=array();
               foreach($review as $key=>$rev)
                  {
                     foreach($ratings as $key1=>$rat)
                     {
                        if($rev==$rat)
                        {
                           $rating[$key]= $key1;
                        }
                     }
                  } 

                 $dataPi =DB::table('product_reviews')
                   ->select(DB::raw('COUNT(*) as count,rating'))
                  ->leftJoin('products', 'products.id', '=', 'product_reviews.products_id')
                  ->whereMonth('product_reviews.added_on', date('m'))
                  ->groupBy('rating')
                  ->where(['products.added_by'=>session()->get('ADMIN_ID')])
                  ->get();
                // prx($dataPi);    
        return view('admin.dashboard_vendor',compact('totalreview','users','current_users','activeUsers','page_name','totalProducts','totalCategory','totalBrand','totalOrder','todayOrder','thisMonthOrder','thisYearOrder','datas','data','review','rating','dataPi'));
       // return view('admin.dashboard');
    }


    public  function logout(){
    	Auth::logout();
	  	return redirect('/admin');
    }
    public function changePassword(){
		$data['page_name'] = 'Change Password';
        $data['sub_page_name'] = 'Change Password';
    	
		return view('admin.changepassword',$data);
	}
	public function updatePassword(Request $request){
		$this->validate($request,[
                'password' => 'min:6|required_with:cpassword|same:cpassword',
				'cpassword' => 'min:6'
            ],[
                'password.required' => 'The password field is required.',
                'cpassword.required' => 'The confirm password field is required.',
            ]);

		$userDetail = User::where('user_type','admin_user')->get()->first();
		$userDetail->password = bcrypt($request->password);
		$userDetail->save();
        $request->session()->flash('message', 'News Updated successful!');
        return redirect('admin/dashboard');
		//echo '<pre>';
		//print_r($newsDetail->toArray());die();
    }
}
