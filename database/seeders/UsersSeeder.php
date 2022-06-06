<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      User::create([
        'nom' => 'Admin',
        'prenoms' => 'Bara Gnini',
        'email' => 'admin@email.com',
        'role_id' => Role::SUPER_ADMIN,
        'password' => Hash::make('pass2022'),
      ]);
  
      //Creation de 10 offres d'emoi pour chaque DRH crée
      //Role::DRH = 2 (L'id du role DRH)
      
      User::factory(10)->sequence(['role_id' => Role::DRH])->create();
      $usersDRH = User::isDrh()->get(); // Recuperation de tous les DRH uniquement
      
      // Pour chaque DRH on crée 10 offres d'emploi
      foreach($usersDRH as $drh)
      {
        \App\Models\Emploi::factory(10)->sequence(['user_id' => $drh->id])->create();
      }
    }
}
