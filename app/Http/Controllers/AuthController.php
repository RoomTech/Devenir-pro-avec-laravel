<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\SendWelcomeNotification;

class AuthController extends Controller
{
  //creons la function register

  public function register(Request $request)
  {
    $request->validate([
      'nom' => 'required|string|max:255',
      'prenoms' => 'required|string|max:255',
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'cv' => 'required|file',
      'lien_photo' => 'required|file',
    ]);
    //Traitements des fichiers
    $cv = $request->cv->store('cv');
    $lien_photo = $request->lien_photo->store('photos');
    //Envoie aleatoire des passwords
    $passwordGenerate = Str::random(8);
    //Enregistrements des informations
    $user = User::create([
      'nom' => $request->nom,
      'cv' => $cv,
      'prenoms' => $request->prenoms,
      'email' => $request->email,
      'lien_photo' => $lien_photo,
      'password' => Hash::make($passwordGenerate),
      'role_id' => \App\Models\Role::CANDIDATE
    ]);
    //Envoie des notifications aaux users est une instancte de la classe
    $user->notify(new SendWelcomeNotification($passwordGenerate));
    //Renvoir du message 
    session()->flash('success', 'Nous avons envoye vos informations par email');
    return back();
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => ['required', 'email'],
      'password' => 'required|string'

    ]);

    //Recuperation de l'email de l'utilisateur
    $user = User::whereEmail($request->email)->first();

    // $user existe et mot tapé est pareil que celui hashé il est redigiré vers les offres
    if ($user && Hash::check($request->password, $user->password)) {
      Auth::login($user); // Connexion de l'utilisateur
      session()->flash('success', 'Vous etes connecté!');
      return redirect()->route('offres.index');
    }

    session()->flash('error', 'E-mail ou mot de passe incorrect !');
    return back();
  }


  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    session()->flash('success', 'Vous etes deconnecté!');
    return redirect()->route('login');
  }
}
