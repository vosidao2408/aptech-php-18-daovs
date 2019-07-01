<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
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
        DB::table('users')->insert([
            'name' => $faker->lastName,
            'email'=> $faker->email,
            'password'=> bcrypt('secret'),
        ]);
    }
}
}