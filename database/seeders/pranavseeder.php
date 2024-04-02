<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class pranavseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) 
        { 
            DB::table('products')->insert([
                'product_name' => 'Accent',
                'product_price' => '574600',
                'product_description' => 'Hyndai accent 2006 model black',
                'product_photo' => '1681472210.jpg',
            ]);    
        }
    }
}
