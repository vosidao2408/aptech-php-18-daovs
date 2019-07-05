<?php

use Illuminate\Database\Seeder;

class Article_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){       
        DB::table('article_category')->insert([
            'article_id'=>$faker->numberBetween($min = 1, $max = 5),
            'category_id'=>$faker->numberBetween($min = 1, $max = 5)
        ]);
    }
}
}
