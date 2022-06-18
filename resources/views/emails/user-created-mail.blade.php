@component('mail::message')
# Nouveau candidat

Hello Admin vous avez une nouvelle candidature pour l'offre {{ $emploi->titre }} <br>
Ci joint vous trouverez le cv du candidat.


Cordialement,<br>
{{ config('app.name') }}
@endcomponent
