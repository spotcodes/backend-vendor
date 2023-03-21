<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->session()->has('ADMIN_LOGIN'))
       {
        return redirect('admin/dashboard');
       }
       else{
             return view('admin.index');
           }
       return view('admin.index');
    }
	 public function auth(Request $request)
    {
       $email= $request->post('email');
	   $password= $request->post('password');
	 //  $result=Admin::where(['email'=>$email,'password'=>$password])->get();
        $result=Admin::where(['email'=>$email])->first();
        
        if($result)
        {
            if(Hash::check($request->post('password'),$result->password))
            {
                
            $request->session()->put('ADMIN_LOGIN',TRUE);
            $request->session()->put('ADMIN_ID',$result->id);
            return redirect('admin/dashboard');
            }
            else{
                $request->session()->flash('error','Please enter correct Password');
		        return redirect('admin');
            }
        }
        else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }

	//    if(isset($result['0']->id))
	//    {
	// 	   $request->session()->put('ADMIN_LOGIN',TRUE); 
	// 	   $request->session()->put('ADMIN_ID',$result['0']->id);
	// 	   return redirect('admin/dashboard');
	//    }
	//    else
	//    {
	// 	   $request->session()->flash('error','Please enter valid login details');
	// 	   return redirect('admin/dashboard');
	//    }
    }
	public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function updatePassword()
    {
        $r= Admin::find(1);
        $r->password=Hash::make('admin@123');
        $r->save();
    }
    
}
