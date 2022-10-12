<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'=>'1',
                'category_name'=>'Leather',
                'category_name_bn'=>'চামড়া',
                'short_description'=>'চামড়া প্রোডাক্ট শর্ট ডিস্ক্রিপশন এখানে',
                'link'=>'leather',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'1',
                'show_home'=>Category::YES,
                'status'=>Category::ACTIVE,
                'created_by'=>1,
            ],

            [
                'id'=>'2',
                'category_name'=>'Jute',
                'category_name_bn'=>'পাট',
                'short_description'=>'পাট প্রোডাক্ট শর্ট ডিস্ক্রিপশন এখানে',
                'link'=>'jute',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'1',
                'show_home'=>Category::YES,
                'status'=>Category::ACTIVE,
                'created_by'=>1,
            ],

            [
                'id'=>'3',
                'category_name'=>'Garments',
                'category_name_bn'=>'গার্মেন্টস',
                'short_description'=>'গার্মেন্টস প্রোডাক্ট শর্ট ডিস্ক্রিপশন এখানে',
                'link'=>'garments',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'1',
                'show_home'=>Category::YES,
                'status'=>Category::ACTIVE,
                'created_by'=>1,
            ],
        ];

        $category=Category::first();
        if (empty($category)){
            Category::insert($categories);
        }
    }
}
