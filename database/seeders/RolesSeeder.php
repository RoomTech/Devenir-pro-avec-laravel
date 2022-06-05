<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Role::create([
        'id' => Role::SUPER_ADMIN,
        "nom" => 'Admin fonctionnel'
      ]);
  
      $drh = \App\Models\Role::create([
        'id' => Role::DRH,
        "nom" => 'Directeur/Directrice des resources humaines'
      ]);
  
      \App\Models\Role::create([
        'id' => Role::CANDIDATE,
        "nom" => 'Postulant'
      ]);
    }
}
