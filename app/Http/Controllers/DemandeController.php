<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;
use App\Mail\UserCreatedMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\RequestUsersNotification;
use App\Notifications\RequestCreatedNotification;
use App\Notifications\NotifyCandidateNotification;

class DemandeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Emploi $emploi)
    {
      

       $request->validate([
        'motivation' => ['required','string', 'min:20']
       ]);

       //dd(auth()->user());
     
     $demande =   \App\Models\Demande::create([
        'motivation' => $request->motivation,
        'user_id' => auth()->user()->id,
        'emploi_id' => $emploi->id
       ]);

       //$message = "Votre demande a ete prise en compte veuillez patientez";
       //On notifie le drh pour chaque demande efectuee
       //$emploi->user->notify(new RequestCreatedNotification($demande));
       $path = asset('storage/'.auth()->user()->cv);
       Mail::to($emploi->user->email)->send(new UserCreatedMail($emploi, auth()->user()->cv));
       //auth()->user()->notify(new NotifyCandidateNotification);

       //Message de prise en compte 
       alert()->success('Bravo !','Votre demande a ete prise en compte veuillez patientez');
       return redirect()->route('offres.index');

     
    }

    
}
