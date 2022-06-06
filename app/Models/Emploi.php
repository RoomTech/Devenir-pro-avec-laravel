<?php

namespace App\Models;

use App\Models\User;
use App\Models\Contrat;
use App\Models\Demande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emploi extends Model
{
    use HasFactory;

    public function contrat()
    {
      return $this->belongsTo(Contrat::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function demandes()
    {
      return $this->hasMany(Demande::class);
    }

    public function scopeIsDisponible($query)
    {
      return $query->where('disponible', true);
    }
}
