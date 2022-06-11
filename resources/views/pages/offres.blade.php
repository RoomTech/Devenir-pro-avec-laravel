@extends('layouts.app')
@section('content')
<header class='pt-10 pb-10 bg-gradient-to-l from-indigo-900 to-indigo-500'>
  <div class='container mx-auto'>
      @include('partials.navbar')
      <div class='mt-28  items-center'>
          <div class='text-center mx-auto'>
              <h2 class='text-6xl text-white font-bold mb-2'>Toutes les offres</h2>
          </div>
      </div>
  </div>
</header>
<section class="container mt-16">
  @include('partials.flasher')
  <div class='bg-gray-100 text-gray-700  font-sans quicksand'>
      <h1 class="text-center font-bold p-10 text-3xl">Offres</h1>
      <div class="p-4">
          <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10">
              @forelse ($emplois as $emploi)
                  <div class="bg-white overflow-hidden hover:bg-indigo-300 border border-gray-200 p-3">
                      <div class="m-2 text-justify text-sm">
                          <p class="text-right text-xs">Posté le
                              {{ \Carbon\Carbon::parse($emploi->created_at)->locale('FR_fr')->isoFormat('dddd D MMMM YYYY') }}
                          </p>
                          <h2 class="font-bold text-sm h-2 mb-8">{{ $emploi->titre }} |
                              {{ $emploi->contrat->nom }} | {{ $emploi->demandes_count . ' demandes' }} </h2>
                          <p class="text-xs">
                              {{ $emploi->description }}
                          </p>
                      </div>
                      <div class="w-full text-right mt-4">
                          <a class="text-indigo-600 uppercase font-bold text-sm"
                              href="{{ route('emploi.create.demande', $emploi->id) }}">Postuler</a>
                      </div>
                  </div>
              @empty
                  <div class='bg-blue-200 text-sm text-center py-2'>
                      Aucune offre d'emploi disponible pour l'instant
                  </div>
              @endforelse
          </div>
      </div>
  </div>
</section>
<div class="text-center px-20 mb-4">
  {{ $emplois->links() }}
</div>
@endsection


