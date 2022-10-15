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
                'category_name_bn'=>'Leather',
                'short_description'=>'Leather Product short description here',
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
                'category_name_bn'=>'Jute',
                'short_description'=>'Jute Product short description here',
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
                'category_name_bn'=>'Garments',
                'short_description'=>'Garments Product short description here',
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
