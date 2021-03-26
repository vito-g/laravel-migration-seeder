<?php

use Illuminate\Database\Seeder;
use App\Coffee;

class CoffeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $coffee = new Coffee();
      $coffee->quality = 'Arabica';
      $coffee->origin = 'Etiopia';
      $coffee->description = 'una delle più note e consumate al mondo. E’ anche la specie che è stata utilizzata per prima per fare il caffè. Ha un contenuto minore di caffeina rispetto ad altre specie in commercio.';
      $coffee->caffeine = '1.5%';
      $coffee->save();
    }
}
