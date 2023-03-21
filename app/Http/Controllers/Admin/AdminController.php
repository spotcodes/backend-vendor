<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Models\Admin\Customer;
use App\Models\Admin\Order;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

        // $result=Admin::where(['email'=>$email,'password'=>$password])->get();
        $result=Admin::where(['email'=>$email])->first();
        if($result){
            if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                $request->session()->put('ADMIN_NAME',$result->name);
                $request->session()->put('ADMIN_ROLE',$result->role);
				$request->session()->put('ADMIN_EMAIL',$result->email);
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error','Please enter correct password');
                return redirect('admin');
            }
        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }
    }


    public function barChart()
    {
        $users=Customer::select(DB::raw("count('*') as count"))
                        ->whereYear('created_at',date('Y'))
                        ->groupBy(DB::raw("Month(created_at)"))
                        ->pluck('count');
        $months=Customer::select(DB::raw("Month(created_at) as month"))
                        ->whereYear('created_at',date('Y'))
                        ->groupBy(DB::raw("Month(created_at)"))
                        ->pluck('month');
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $key=>$month)
        {
            $datas[$month]=$users[$key];
        }
        return view('admin.dashboard',compact('datas'));
    }



    public function account(Request $request)
    {
        $result['data']=DB::table('admins')  
        ->where(['is_email'=>1,'is_verify'=>1])
        ->where(['email'=>session()->get('ADMIN_EMAIL')])
        ->get(); 

      // prx($result);
       return view('admin.account',$result);
    }

    public function emailChange(Request $request)
    {
         
      
        $result=DB::table('admins')  
        ->where(['is_email'=>1,'is_verify'=>1,'id'=>session()->get('ADMIN_ID')])
            ->get(); 
        if(isset($result[0]))
        { 
            if(empty($request->password))
            {
                $query=DB::table('admins')  
                      ->where(['id'=>session()->get('ADMIN_ID')])
                      ->update(['email'=>$request->email,'is_verify'=>0,'is_email'=>0]); 
            }
                else
                {
                    $password=Hash::make($request->password);
                    $query=DB::table('admins')  
                        ->where(['id'=>session()->get('ADMIN_ID')])
                        ->update(['email'=>$request->email,'password'=>$password,'is_verify'=>0,'is_email'=>0]); 
                }
               // prx($result[0]->name);
                if($query)
                {

                    $data=['name'=>$result[0]->name,'is_email'=>$result[0]->is_email];
                    
                    $user['to']=$request->email;
                    //prx($data);
                    Mail::send('admin/verification_email',$data,function($messages) use ($user){
                        $messages->to($user['to']);
                        $messages->subject('Email Id Verification');
                    });
                    return response()->json(['status'=>'success','msg'=>"Email id change successfully. Please check your email id for Email id Change"]);
                }
          }
    }


    function verification_email(Request $request,$id)
    {
        $result=DB::table('admins') 
            ->where(['is_verify'=>1])
            ->get(); 

        if(isset($result[0])){
            DB::table('admins')  
            ->where(['id'=>$result[0]->id])
            ->update(['is_verify'=>1,'is_email'=>$id]);
           // session()->forget('ADMIN_LOGIN');
           // session()->forget('ADMIN_ID');
	  	 return view('admin.verification');
        }else{
            return redirect('/');
        }
    }


public function updatePassword(Request $request){
    	
		$id=2;
		
		$password="basant";
		//$sr = DB::table('users') ->where('id', $id) ->limit(1) ->update( [ 'password' => $password]);
		$UpdateDetails = Admin::where('id',$id)->first();
        $UpdateDetails->password =  Hash::make($password);
        $UpdateDetails->save();
		dd($UpdateDetails);

	}
}
