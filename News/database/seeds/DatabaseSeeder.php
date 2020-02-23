<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            DB::table('categories')->truncate();
            DB::table('articles')->truncate();

            $this->call([CategoriesTableSeeder::class]);
            $this->call([ArticlesTableSeeder::class]);
             // UsersTableSeeder::class);
         
    }
}
