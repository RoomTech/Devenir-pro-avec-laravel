<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Emploi;
use App\Models\Demande;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'nom',
    'prenoms',
    'email',
    'lien_cv',
    'cv',
    'contact',
    'password',
    'role_id'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];


  public function role(): BelongsTo
  {
    return $this->belongsTo(Role::class);
  }

  public function emplois()
  {
    return $this->hasMany(Emploi::class);
  }

  public function demandes()
  {
    return $this->hasMany(Demande::class);
  }

  public function scopeIsDrh($query) 
  {
    return $query->where('role_id', Role::DRH);
  }

  public function scopeCandidate($query)
  {
    return $query->where('role_id', Role::CANDIDATE);
  }

 
}
