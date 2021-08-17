<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'Meat']);
        Category::create(['name'=>'SeaFood']);
        Category::create(['name'=>'Vegetable']);
        Category::create(['name'=>'Curry']);
        Category::create(['name'=>'Others']);
    }
}
