<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    public function index(REQUEST $request)
    {
        $queryString = http_build_query([
            'access_key' => '070b2526ccbe0b0dbd464ef6da30e884',
            'keywords' => 'Wall street -wolf', // the word "wolf" will be
            'categories' => '-entertainment',
            'sort' => 'popularity',
          ]);
          
          $ch = curl_init(sprintf('%s?%s', 'http://api.mediastack.com/v1/news', $queryString));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          
          $json = curl_exec($ch);
          
          curl_close($ch);
          
          $apiResult = json_decode($json, true);
         foreach($apiResult['data'] as $val)
         {
           $returnData['title']=$val['title'];
           $returnData['description']=$val['description'];
         }
         return response()->json($returnData);
     }
}


