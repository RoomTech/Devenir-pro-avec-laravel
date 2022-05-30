<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Emploi extends Model
{
    use HasFactory;

    public function contrat()
    {
      return $this->belongsTo(Contrat::class);
    }
}
