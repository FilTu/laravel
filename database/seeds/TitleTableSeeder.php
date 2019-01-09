<?php

use Illuminate\Database\Seeder;
use App\Title;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate existing table
        Title::Truncate();

        //Inserting fake data
        $fake_data = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Title::create([
                'title' => $fake_data->sentence,
            ]);
          }
      }
}
