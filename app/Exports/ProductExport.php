<?php

namespace App\Exports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
		            //$condition="";
                    //if(session()->get('ADMIN_ROLE')==1)
                    //{
                    //    $condition='and added_by="'.session()->get('ADMIN_ID').'"';
                    //}
                    //$result['data']= DB::table('products')->whereRaw('(status=1 or status=0) '.$condition.'')->orderBy('id','DESC')->get();
                   // return $result['data'];
			         $condition="";
                    if(session()->get('ADMIN_ROLE')==1)
                    {
                      $condition='and added_by="'.session()->get('ADMIN_ID').'"';
                    }	   
	                return Product::whereRaw('(status=1 or status=0) '.$condition.'')->orderBy('id','ASC')->get();			   
    }
}
