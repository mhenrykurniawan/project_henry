<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal5Controller extends Controller
{
    public function index(){
        $count=200;

        $data_bagi_4=[];
        $data_bagi_3_7=[];

        for($i=1;$i<=$count;$i++){
           
            if($i/4==1 && $i%4==0){
                $data_bagi_4[$i]='Empat';
            }else if($i/3==1 && $i%3==0){
                $data_bagi_3_7[$i]='Tiga_Tuju';
            }
        }
            dd($data_bagi_3_7,$data_bagi_4);
        return $data;
    }
}
