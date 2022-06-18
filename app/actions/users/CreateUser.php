<?php

namespace App\actions\users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class CreateUser
{
  public function create(array $data): User
  {


    DB::beginTransaction();

    $user = User::create([
      'nom' => $data['nom'],
      'cv' => $data['cv'],
      'prenoms' => $data['prenoms'],
      'email' => $data['email'],
      'lien_photo' => $data['lien_photo'],
      'password' => Hash::make($data['passwordGenerate']),
      'role_id' => Role::CANDIDATE
    ]);

    DB::commit();

    return $user;
  }
}
