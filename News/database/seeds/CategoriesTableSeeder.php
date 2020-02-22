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
        $categories = array(
            ['name' => 'Policial'],
            ['name' => 'Economia'],
            ['name' => 'Politica'],
            ['name' => 'Sociedad'],
            ['name' => 'Deportes']);
        foreach($categories as $category)
        {
          Category::insert($category);
        }
    }
}
