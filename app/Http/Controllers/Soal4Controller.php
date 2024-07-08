<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Soal4Controller extends Controller
{
    public function index(){
        $raw = Http::get('https://pastebin.com/raw/wUAzfJJD');
// dd($raw);
        return  $raw;
        return view('index',compact('breeds'));
    }
}
