<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $emplois = Emploi::with('contrat')->withCount('demandes')->isDisponible()->latest()->inRandomOrder()->take(6)->get();
    //$emplois = Emploi::all(); Recuperations de tous les emplois sans exception
    //$emplois = Emploi::where('disponible', 1)->get() | Emploi::whereDisponible(true)->get() | Emploi::whereDisponible(false)->get() Recuperations de tous les emplois disponibles
    //$emplois = Emploi::where('disponible', 0)->inRandomOrder()->take(6)->get(); Recuperations de 6 emplois indisponibles au hasard 
    return view('welcome', ['emplois' => $emplois]);
  }
}
