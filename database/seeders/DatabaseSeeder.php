<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Contrat;
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
      UsersSeeder::class,
    ]);
  }
}
