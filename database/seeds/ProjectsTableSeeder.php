<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('projects')->insert([
          'name' => 'Programa de Competitividad de Ancash',
          'description' => 'Programa de desarrollo en el departamento de Ancash',
          'year_id' => '1'
      ]);

      DB::table('projects')->insert([
          'name' => 'Programa Talento Pisco',
          'description' => 'Programa de formación educativa secundaria en la provincia de Pisco',
          'year_id' => '1'
      ]);


    }
}
