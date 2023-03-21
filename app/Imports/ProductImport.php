<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'id'=>$row['0'],
			'category_id'=>$row['1'],
			'name'=>$row['2'],
			'image'=>$row['3'],
			'slug'=>$row['4'],
			'brand'=>$row['5'],
			'model'=>$row['6'],
			'short_desc'=>$row['7'],
			'desc'=>$row['8'],
			'keywords'=>$row['9'],
			'technical_specification'=>$row['10'],
			'uses'=>$row['11'],
			'warranty'=>$row['12'],
			'lead_time'=>$row['13'],
			'tax_id'=>$row['14'],
			'is_promo'=>$row['15'],
			'is_featured'=>$row['16'],
			'is_discounted'=>$row['17'],
			'is_tranding'=>$row['18'],
			'status'=>$row['19'],
			'added_by'=>$row['20'],
			'created_at'=>$row['21'],
			'updated_at'=>$row['22'],
			
        ]);
    }
}
