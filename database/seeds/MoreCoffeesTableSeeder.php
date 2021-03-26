<?php

use Illuminate\Database\Seeder;
use App\Coffee;
use Faker\Generator as Faker;

class MoreCoffeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++) {
         $coffee = new Coffee();
         $coffee->quality = $faker->text(20);
         $coffee->origin = $faker->text(20);
         $coffee->description =$faker->text(2048);
         $coffee->caffeine = $faker->text(10);
         $coffee->save();
    }
}
