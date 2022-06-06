<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmploiController extends Controller
{
    public function create($id)
    {
        $emploi = \App\Models\Emploi::find($id);
        return view('pages.demande-form', ['emploi' => $emploi]);
    }


    public function store(Request $request)
    {
      //
    }
}
