<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;


    public const SUPER_ADMIN = 1;
    public const DRH = 2;
    public const CANDIDATE = 3;

   
    public function users()
    {
        return $this->hasMany(User::class);
    }

    


    
}
