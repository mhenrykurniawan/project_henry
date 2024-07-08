<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Soal1Controller extends Controller
{
    public function get_array( $arr){
      $i=1;
      foreach($arr as $a){
        if($a==null ||$a==''){
            return 0;
        }else{
            return  1;
        }
        $i++;
      }
    }

    public function index(){

        $arr=[
            '1'=>'Meja',
            '2'=>'Kursi',
            '3'=>'Pintu',
            '4'=>'Lemari',
            '5'=>'Dipan',
            '6'=>'Bed',
            '7'=>'Jendela',
            '8'=>'Televisi',
        ];
      $nilai=  $this->get_array($arr);
      return $nilai ;

        // $data=[
        //     'title'=>'Soal Nomor 1',
            
        // ];

        // return view('guest.soal1.index',$data);
    }
}
