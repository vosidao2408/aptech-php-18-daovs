<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            DB::table('posts')->insert([
                'title' => $faker->sentence($nbWords = rand(5, 9), $variableNbWords = true),
                'slug' => $faker->slug,
                'description' => $faker->paragraph($nbSentences = rand(1, 3), $variableNbSentences = true),
                'description' => $faker->text,
                'content' => $faker->randomHtml(2, 5)
            ]);
    }
}
}