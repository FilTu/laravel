<?php

use Illuminate\Database\Seeder;
use App\Publishers;

class PublisherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Truncate existing table
      Publishers::Truncate();

      //Inseting fake data
      $fake_data = \Faker\Factory::create();

      for ($i = 0; $i < 50; $i++) {
          Publishers::create([
              'name' => $fake_data->sentence,
              'title_id' => $fake_data->unique()->numberBetween($min = 1, $max = 50),
              'magazine_id' => $fake_data->numberBetween($min = 1, $max = 50),
          ]);
        }
    }
}
