<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Biography'
        ]);

        Category::create([
            'name' => 'Science'
        ]);

        Category::create([
            'name' => 'Enterpreneurship'
        ]);

        Category::create([
            'name' => 'Bussiness Culture'
        ]);

        Category::create([
            'name' => 'Finance and Investing'
        ]);

        Category::create([
            'name' => 'Computer Science'
        ]);

        Category::create([
            'name' => 'Engineering'
        ]);

        Category::create([
            'name' => 'Philosophy'
        ]);
    }
}
