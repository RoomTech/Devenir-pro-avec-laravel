<?php

namespace App\Models;

use App\Models\Emploi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrat extends Model
{
    use HasFactory;

    public function emplois()
    {
        return $this->hasMany(Emploi::class);
    }
}
