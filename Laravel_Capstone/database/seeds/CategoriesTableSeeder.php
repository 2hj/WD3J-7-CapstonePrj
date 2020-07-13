<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
          'name'=>'직장인',
        ]);

        App\Category::create([
          'name'=>'학생',
        ]);

        App\Category::create([
          'name'=>'중년',
        ]);

        App\Category::create([
          'name'=>'비만',
        ]);

        App\Category::create([
          'name'=>'아이',
        ]);

        App\Category::create([
          'name'=>'거북목',
        ]);

        App\Category::create([
          'name'=>'자세교정',
        ]);

        App\Category::create([
          'name'=>'여성',
        ]);

        App\Category::create([
          'name'=>'남성',
        ]);
    }
}
