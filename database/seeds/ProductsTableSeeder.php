<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 200,
            'image'=>'tv.jpg',

        ]);



        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 1000.50,
            'image'=>'nitendo.jpg',

        ]);

        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 570.7,
            'image'=>'celular.jpg',

        ]);

        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 200,
            'image'=>'tv.jpg',

        ]);



        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 1000.50,
            'image'=>'nitendo.jpg',

        ]);

        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 570.7,
            'image'=>'celular.jpg',

        ]);

        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 200,
            'image'=>'tv.jpg',

        ]);



        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 1000.50,
            'image'=>'nitendo.jpg',

        ]);

        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 570.7,
            'image'=>'celular.jpg',

        ]);

        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 200,
            'image'=>'tv.jpg',

        ]);



        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 1000.50,
            'image'=>'nitendo.jpg',

        ]);

        \App\Models\Product::create([

            'name'=>'Nome'.uniqid(date('YmdHis')),
            'description'=>'descrição do produto'.uniqid(date('YmdHis')),
            'price'=> 570.7,
            'image'=>'celular.jpg',

        ]);






    }
}
