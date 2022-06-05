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
            <nav class='flex justify-between'>
                <a>
                    {{ config('app.name') }}
                </a>
                <div>
                    <a href='#' class='ml-4 text-white font-bold hover:text-green-200'>Accueil</a>
                    <a href='#testimony' class='ml-4 text-white font-bold hover:text-green-200'>Offres</a>
                    <a href='#testimony' class='ml-4 text-white font-bold hover:text-green-200'>Témoignages</a>
                    <a href='#' class='ml-4 text-white font-bold hover:text-green-200'>Contact</a>
                </div>
            </nav>
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

    <section class="container mt-10">
      <h1 class="text-left ml-4 font-bold text-3xl">Offres</h1>

    </section>
    </body>
</html>
