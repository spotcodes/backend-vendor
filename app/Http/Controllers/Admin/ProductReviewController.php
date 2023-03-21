<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index()
    {
        if(session()->get('ADMIN_ROLE')==1)
		{
			return redirect('admin/product');
	    }
        $result['data']=
                DB::table('product_reviews')
                ->leftJoin('customers','customers.id','=','product_reviews.customer_id')
                ->leftJoin('products','products.id','=','product_reviews.products_id')
                ->orderBy('product_reviews.added_on','desc')
                ->select('product_reviews.id','product_reviews.rating','product_reviews.review','product_reviews.added_on','customers.name','products.name as pname','product_reviews.status')
                ->get();
        return view('admin.product_review',$result);
    }    

    
    public function update_product_review_status(Request $request,$status,$id)
    {
        DB::table('product_reviews')
        ->where(['id'=>$id])
        ->update(['status'=>$status]);
        return redirect('/admin/product_review/');
    } 

    public function product_review_vendor()
    {
        
        $result['data']=
                DB::table('product_reviews')
                ->leftJoin('customers','customers.id','=','product_reviews.customer_id')
                ->leftJoin('products','products.id','=','product_reviews.products_id')
                ->orderBy('product_reviews.added_on','desc')
                ->select('product_reviews.id','product_reviews.rating','product_reviews.review','product_reviews.added_on','customers.name','products.name as pname','product_reviews.status')
                ->where(['products.added_by'=>session()->get('ADMIN_ID')])
                ->get();
        return view('admin.product_review_vendor',$result);
    }

}
