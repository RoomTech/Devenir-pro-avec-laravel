@extends('layouts.app')
@section('content')
    <header class='pt-10 pb-10 bg-gradient-to-l from-indigo-900 to-indigo-500'>
        <div class='container mx-auto'>
            @include('partials.navbar')
            <div class='mt-28  items-center'>
                <div class='text-center mx-auto'>
                    <h2 class='text-6xl text-white font-bold mb-2'>Postuler a l'offre {{ $emploi->titre }}</h2>
                    <p class='text-sm md:text-base text-white'>
                        {{ $emploi->description }}
                    </p>
                    <div class='mt-10'>
                        <a href='{{ route('offres.index') }}'
                            class='bg-transparent hover:bg-green-900 text-white font-bold hover:text-white py-4 px-6 border border-green-900 hover:border-transparent rounded'>
                            Voir les offres
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="mx-auto px-24 mt-10">
        <p class="text-center text-2xl text-blue-700">Entrer une motivation</p>
        @include('partials.flasher')
        <form action='{{ route('request.store', $emploi) }}' method="POST">
            @csrf
            <div class="mb-6">

                <textarea type="text" name="motivation" id="motivation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('motivation') }}
              </textarea>
            </div>
            @error('motivation')
                <span class='text-sm text-red-400'>{{ $message }}</span>
            @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre
            </button>
        </form>
    </section>
@endsection
