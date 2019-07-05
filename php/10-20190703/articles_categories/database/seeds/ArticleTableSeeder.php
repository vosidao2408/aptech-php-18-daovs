<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<5;$i++){       
        DB::table('articles')->insert([
            'title'=>'The 15 Best Formats for Exit Intent Popups',
            'slug'=>'PHP-'.$i,
            'description'=>'Excellent writing and communication skills are obviously essential but so is a determined attitude and the ability to take criticism.',
            'content'=>$faker->text($maxNbChars = 200)
        ]);
    }
}
}
