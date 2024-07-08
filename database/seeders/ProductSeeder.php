<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    
        $count=10;

       for($i=1;$i<=$count;$i++){

        $supp=Supplier::create([
            'supplier_name'=> 'Supplier '.$i,
            'phone'=> '088346456'.$i,
            'address'=> 'Kudus',
            'email'=> 'supplier '.$i.'@gmail.com',
        ]);
        Product::create([
            'product_name'=>'Product '.$i,
            'id_supplier'=>$supp->id_supplier,
            'price'=>5000,
            'stock'=>100*$i,
        ]);
       }
    }
}
