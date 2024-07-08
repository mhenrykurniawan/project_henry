<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal3Controller extends Controller
{
    
  
      public function index(){
  
          $arr=array(
            ['type'=> 'donut','name'=>'cake','batter'=>'Regular','topping'=>'Glazed'],
            ['type'=> 'donut','name'=>'cake','batter'=>'Regular','topping'=>'Sugar'],
            ['type'=> 'donut','name'=>'cake','batter'=>'Chocolate','topping'=>'Maple'],
            ['type'=> 'donut','name'=>'cake','batter'=>'Bluberry','topping'=>'Glazed'],
            ['type'=> 'donut','name'=>'cake','batter'=>'Bluberry','topping'=>'Sugar'],
            ['type'=> 'bar','name'=>'Bar','batter'=>'Regular','topping'=>'Chocolate'],
            ['type'=> 'bar','name'=>'Bar','batter'=>'Regular','topping'=>'Maple'],
            ['type'=> 'twist','name'=>'Twist','batter'=>'Regular','topping'=>'Glazed'],
            ['type'=> 'twist','name'=>'Twist','batter'=>'Regular','topping'=>'Sugar'],
            ['type'=> 'filled','name'=>'Filled','batter'=>'Regular','topping'=>'Glazed'],
            ['type'=> 'filled','name'=>'Filled','batter'=>'Regular','topping'=>'Powdered Sugar'],
        );
             
          
        $nilai= json_encode($arr);
        return $nilai ;
  
          // $data=[
          //     'title'=>'Soal Nomor 1',
              
          // ];
  
          // return view('guest.soal1.index',$data);
      }
}
