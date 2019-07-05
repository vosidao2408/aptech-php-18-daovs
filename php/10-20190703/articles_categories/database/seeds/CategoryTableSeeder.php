<?php

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
        $faker = Faker\Factory::create();
        foreach (range(1, 3) as $index) {
            DB::table('categories')->insert([
                'name' => $faker->word,
            ]);
        }
}
}
