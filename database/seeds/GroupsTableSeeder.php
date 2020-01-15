<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('groups')->insert([
          'name' => 'Municipalidad Provincial de Cotabambas - Tambobamba',
          'description' => 'Grupo de Cotabambas - Tambobambas',
      ]);

      DB::table('groups')->insert([
          'name' => 'CCD',
          'description' => 'Centro para la Competitividad y el Desarrollo',
      ]);
    }
}
