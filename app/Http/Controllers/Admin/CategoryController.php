<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class CategoryController extends Controller
{

    

    public function index()
    {
        //isAdmin();
        if(session()->get('ADMIN_ROLE')==1)
		{
			return redirect('admin/product');
	    }
        $result['data']=Category::all();
        return view('admin/category',$result);
    }

    
    public function manage_category(Request $request,$id='')
    {
        if($id>0){
            $arr=Category::where(['id'=>$id])->get(); 

            $result['category_name']=$arr['0']->category_name;
            $result['category_slug']=$arr['0']->category_slug;
            $result['parent_category_id']=$arr['0']->parent_category_id;
            $result['category_image']=$arr['0']->category_image;
            $result['is_home']=$arr['0']->is_home;
            $result['is_home_selected']="";
            if($arr['0']->is_home==1){
                $result['is_home_selected']="checked";
            }
            $result['id']=$arr['0']->id;

            $result['category']=DB::table('categories')->where(['status'=>1])->where('id','!=',$id)->get();
        }else{
            $result['category_name']='';
            $result['category_slug']='';
            $result['parent_category_id']='';
            $result['category_image']='';
            $result['is_home']="";
            $result['is_home_selected']="";
            $result['id']=0;

            $result['category']=DB::table('categories')->where(['status'=>1])->get();
            
        }

        return view('admin/manage_category',$result);
    }

    public function manage_category_process(Request $request)
    {
        //return $request->post();
        
       $request->validate([
            'category_name'=>'required',
            'category_image'=>'mimes:jpeg,jpg,png',
            'category_slug'=>'required|unique:categories,category_slug,'.$request->post('id'),   
        ]);

       
        return redirect('admin/category');
        
    }

    public function delete(Request $request,$id){
        $model=Category::find($id);
        $model->delete();
        $request->session()->flash('message','Category deleted');
        return redirect('admin/category');
    }

    public function status(Request $request,$status,$id){
        $model=Category::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Category status updated');
        return redirect('admin/category');
    }

    function slugCheck(Request $request)
    {
		 if($request->post('slug'))
		 {
		  $slug = $request->post('slug');
		  $data = DB::table("categories")
		   ->where('category_slug', $slug)
		   ->count();
		  if($data > 0)
		  {
		   echo 'not_unique';
		  }
		  else
		  {
		   echo 'unique';
		  }
		 }
    }

    
}
