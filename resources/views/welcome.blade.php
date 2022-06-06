<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <header class='pt-10 pb-10 bg-gradient-to-l from-indigo-900 to-indigo-500'>
        <div class='container mx-auto'>
            @include('partials.header')
            <div class='mt-28  items-center'>
                <div class='text-center mx-auto'>
                    <h2 class='text-6xl text-white font-bold mb-2'>Baragnini</h2>
                    <p class='text-sm md:text-base text-white'>
                        Votre plateforme d'offres d'emploi...
                    </p>
                    <div class='mt-10'>
                        <a href='#'
                            class='bg-transparent hover:bg-green-900 text-white font-bold hover:text-white py-4 px-6 border border-green-900 hover:border-transparent rounded'>
                            Voir les offres
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="container mt-16">
        <div class='bg-gray-100 text-gray-700  font-sans quicksand'>
            <h1 class="text-center font-bold p-10 text-3xl">Recentes offres</h1>
            <div class="p-4">
                <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10">
                    @foreach ($emplois as $emploi)
                        <div class="bg-white overflow-hidden hover:bg-indigo-300 border border-gray-200 p-3">
                            <div class="m-2 text-justify text-sm">
                                <p class="text-right text-xs">Posté le
                                    {{ \Carbon\Carbon::parse($emploi->served_at)->locale('FR_fr')->isoFormat('dddd D MMMM YYYY') }}
                                </p>
                                <h2 class="font-bold text-lg h-2 mb-8">{{ $emploi->titre }} </h2>
                                <p class="text-xs">
                                    {{ $emploi->description }}
                                </p>
                            </div>
                            <div class="w-full text-right mt-4">
                                <a class="text-indigo-600 uppercase font-bold text-sm"
                                    href="{{ route('emploi.create.demande', $emploi->id) }}">Postuler</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>
</html>
