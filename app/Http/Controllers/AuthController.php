<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //creons la function register

    public function register(Request $request)
    {
        $request->validate([
          'nom' => 'required|string|max:255',
          'prenoms' => 'required|string|max:255',
          'email' =>['required', 'email', Rule::unique('users','email')],
          'cv'=>'required|file',
          'lien_photo'=>'required|file',
        ]);
        //Traitements des fichiers
        $cv = $request->cv->store('cv');
        $lien_photo = $request->lien_photo->store('photos');
        //Envoie aleatoire des passwords
        $passwordHash = Str::random(8);
        //Enregistrements des informations
        User::create([
          'nom' => $request->nom,
          'cv' => $cv,
          'prenoms'=>$request->prenoms,
          'email'=>$request->email,
          'lien_photo'=>$lien_photo,
          'password' => Hash::make($passwordHash),
          'role_id' => \App\Models\Role::CANDIDATE
        ]);


        session()->flash('success', 'Nous avons envoye vos informations par email');
        return back();
    
       
    }
   

}
