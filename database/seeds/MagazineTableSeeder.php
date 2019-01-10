<?php

use Illuminate\Database\Seeder;
use App\Magazine;

class MagazineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate existing table
        Magazine::Truncate();

        //Inseting fake data
        $fake_data = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Magazine::create([
                'name' => $fake_data->company(),
            ]);
          }
      }
}
