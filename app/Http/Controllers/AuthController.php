<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\actions\users\CreateUser;
use App\Http\Requests\UserRequest;
use App\Services\UploadFileService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\SendWelcomeNotification;

class AuthController extends Controller
{
  //creons la function register equest $request ,

  public function register(UserRequest $request, CreateUser $action)
  {
    //Traitements des fichiers
    $files = $this->uploadFiles($request);
  
    $passwordGenerate = Str::random(8);
    $files['passwordGenerate'] = $passwordGenerate;
  
    //dd($data);
    $user = $action->create(array_merge($request->toArray(), $files));
   
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
    toast('Vous etes deconnecté!','info');
    return redirect()->route('login');
  }

  private function uploadFiles(UserRequest $request)
  {
    $fileService = new UploadFileService();
    $cv = $fileService->upload($request->cv, 'cv');
    $lien_photo = $fileService->upload($request->lien_photo, 'photo');
    return compact('cv', 'lien_photo');
  }
}
