<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=> 'LG moile',
            'price'=>"100",
            "description"=> "A smart phone with 4gb ram and much more feature.",
            "category"=> "mobile",
            "gallery"=> "https://www.lg.com/eastafrica/lgoled/gx-gallery"


        ], [

            'name'=> 'LG moile',
            'price'=>"100",
            "description"=> "A smart phone with 4gb ram and much more feature.",
            "category"=> "mobile",
            "gallery"=> "https://www.lg.com/eastafrica/lgoled/gx-gallery"


        ], [


            'name'=> 'LG TV',
            'price'=>"100",
            "description"=> "A smart phone with 4gb ram and much more feature.",
            "category"=> "TV",
            "gallery"=> "https://www.lg.com/eastafrica/lgoled/gx-gallery"


        ],
         [


            'name'=> 'LG moile',
            'price'=>"100",
            "description"=> "A smart phone with 4gb ram and much more feature.",
            "category"=> "Laptop",
            "gallery"=> "https://www.lg.com/eastafrica/lgoled/gx-gallery"


        ],
         [


            'name'=> 'LG moile',
            'price'=>"100",
            "description"=> "A smart phone with 4gb ram and much more feature.",
            "category"=> "Macbook",
            "gallery"=> "https://www.lg.com/eastafrica/lgoled/gx-gallery"
         ]

         ]);


    }

}
