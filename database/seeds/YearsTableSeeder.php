<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('years')->insert([
          'idYear' => 1,
          'name' => '2019',
      ]);

      DB::table('years')->insert([
          'idYear' => 2,
          'name' => '2020',
      ]);
    }
}
