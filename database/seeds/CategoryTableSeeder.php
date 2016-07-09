<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Fijo']);
        Category::create(['name' => 'Internet']);
        Category::create(['name' => 'Movil']);
        Category::create(['name' => 'Correos']);
    }
}
