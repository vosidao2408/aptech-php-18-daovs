<?php

use Illuminate\Database\Seeder;
use App\Article;
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
        for($i=0;$i<10;$i++){
        Article::create([
            'title'=>$faker->title,
            'slug'=>$faker->slug,
            'description'=>$faker->text($maxNbChard = 200),
            'content'=>$faker->text($maxNbChard = 2000),
            'view' => rand(1,100)
        ]);
    }}
}
