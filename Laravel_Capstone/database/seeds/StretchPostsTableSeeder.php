<?php

use Illuminate\Database\Seeder;

class StretchPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\StretchPost::create([
          'title'=>'직장인1',
          'category_id'=>1,
          'source' => 'https://www.youtube.com/embed/zRaPfQUaSUY',
        ]);
        
        App\StretchPost::create([
          'title'=>'직장인2',
          'category_id'=>1,
          'source' => 'https://www.youtube.com/embed/iyTd09JlB0k',
        ]);

        App\StretchPost::create([
          'title'=>'직장인3',
          'category_id'=>1,
          'source' => 'https://www.youtube.com/embed/CbUciuVHmHc',
        ]);


        App\StretchPost::create([
          'title'=>'학생1',
          'category_id'=>2,
          'source' => 'https://www.youtube.com/embed/CbUciuVHmHc',
        ]);

        App\StretchPost::create([
          'title'=>'학생2',
          'category_id'=>2,
          'source' => 'https://www.youtube.com/embed/IW_kdRiMitM',
        ]);

        App\StretchPost::create([
          'title'=>'학생3',
          'category_id'=>2,
          'source' => 'https://www.youtube.com/embed/x8nZAHM3XtU',
        ]);


        App\StretchPost::create([
          'title'=>'중년1',
          'category_id'=>3,
          'source' => 'https://www.youtube.com/embed/_KSqbC7LJ2g',
        ]);


        App\StretchPost::create([
          'title'=>'비만1',
          'category_id'=>4,
          'source' => 'https://www.youtube.com/embed/Z7m4mv8arb4',
        ]);

        App\StretchPost::create([
          'title'=>'비만2',
          'category_id'=>4,
          'source' => 'https://www.youtube.com/embed/00EbZqGlZBY',
        ]);


        App\StretchPost::create([
          'title'=>'거북목1',
          'category_id'=>6,
          'source' => 'https://www.youtube.com/embed/YPYPvcRE4m8',
        ]);

        App\StretchPost::create([
          'title'=>'거북목2',
          'category_id'=>6,
          'source' => 'https://www.youtube.com/embed/3aTPapvWpKs',
        ]);

        App\StretchPost::create([
          'title'=>'거북목3',
          'category_id'=>6,
          'source' => 'https://www.youtube.com/embed/Io5NYpzfsEU',
        ]);


        App\StretchPost::create([
          'title'=>'자세교정',
          'category_id'=>7,
          'source' => 'https://www.youtube.com/embed/nQlbDogfCpE',
        ]);
    }
}
