<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;

class EmploiController extends Controller
{

  public function index()
  {
    $emplois = Emploi::isDisponible()->with('contrat')->withCount('demandes')->paginate(12);
    return view('pages.offres', compact('emplois'));
  }



    public function create($id)
    {
        $emploi = Emploi::find($id);
        return view('pages.demande-form', ['emploi' => $emploi]);
    }


    public function store(Request $request)
    {
      //
    }
}
