<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Emploi;
use App\Models\Contrat;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {



    $this->call([
      ContratsSeeder::class,
      RolesSeeder::class,
    ]);

    User::create([
      'nom' => 'Admin',
      'prenoms' => 'Bara Gnini',
      'email' => 'admin@email.com',
      'role_id' => Role::SUPER_ADMIN,
      'password' => Hash::make('pass2022'),
    ]);


    if (env('APP_ENV') == 'production') {
      $this->call(UsersSeeder::class);
      return 1;
    }

    for ($i = 0; $i < 15; $i++) {

      $user = User::create([
        'nom' => 'RH',
        'prenoms' => "Admin ".$i,
        'email' => "drh$i@bara.ci",
        'role_id' => Role::DRH,
        'password' => Hash::make('pass2022'),
      ]);

      Emploi::create([
        'titre' => "offfre " . Str::random(3),
        'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem amet eligendi exercitationem, animi mollitia? Eligendi expedita veritatis quae in maxime aliquid ducimus, incidunt qui tenetur velit atque laborum ipsum",
        'disponible' => rand(0, 1),
        'contrat_id' => \App\Models\Contrat::all()->random()->id,
        'user_id' => $user->id,
      ]);
    }
  }
}
