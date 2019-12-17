<?php

use Illuminate\Database\Seeder;

class TypedocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('typedocuments')->insert([
          'name' => 'Propuestas',
          'description' => 'Propuestas PCA',
          'project_id' => '1'
      ]);

      DB::table('typedocuments')->insert([
          'name' => 'Protocolos',
          'description' => 'Protocolos PCA',
          'project_id' => '1'
      ]);

      DB::table('typedocuments')->insert([
          'name' => 'Entregables',
          'description' => 'Entregables PCA',
          'project_id' => '1'
      ]);
    }
}
