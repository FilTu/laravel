<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Inserting admin user with password admin

      DB::table('users')->insert([
         'name' => 'admin',
         'email' => 'admin@admin.com',
         'password' => bcrypt('admin'),
     ]);
    }
}
