<?php

namespace Database\Seeders;

use App\Models\Contrat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContratsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Contrat::create(['nom' => 'CDI']);
      Contrat::create(['nom' => 'CDD']);
      Contrat::create(['nom' => 'Stage']);
      Contrat::create(['nom' => 'Pré emploi']);
    }
}
