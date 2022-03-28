<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert(
            [
            'name'=>'LG moblie',
            'price'=>'10000',
            'description'=>'new mobile 4gb ram',
            'category'=>'mobile',
            'gallery'=>"https://m.media-amazon.com/images/I/71Y8rH2cJiL._AC_UY218_.jpg",
        ],
        [
            'name'=>'samsung tv',
            'price'=>'15000',
            'description'=>'new tv best screen',
            'category'=>'tv',
            'gallery'=>"https://m.media-amazon.com/images/I/815JFdxodlL._SY450_.jpg",
        ],
        [
            'name'=>'LG tv',
            'price'=>'18000',
            'description'=>'new tv best screen',
            'category'=>'tv',
            'gallery'=>"https://m.media-amazon.com/images/I/613qHIDrUWS._SX569_.jpg",
        ],
        [
            'name'=>'LG camera',
            'price'=>'8000',
            'description'=>'new camera best screen',
            'category'=>'camera',
            'gallery'=>"https://m.media-amazon.com/images/I/21CffnnlkJL.jpg",
        ]);
    }
}
