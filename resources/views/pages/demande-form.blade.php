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
                    <h2 class='text-6xl text-white font-bold mb-2'>Postuler a l'offre {{ $emploi->titre }}</h2>
                    <p class='text-sm md:text-base text-white'>
                        {{ $emploi->description }}
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
            <h1 class="text-center font-bold p-10 text-3xl">Postuler a l'offres</h1>
            <div class="p-4">
                <!-- component -->
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div
                            class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                <p>
                                    <label for="name" class="bg-white text-gray-600 px-1">First name *</label>
                                </p>
                            </div>
                            <p>
                                <input id="name" autocomplete="false" tabindex="0" type="text"
                                    class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                            </p>
                        </div>
                        <div
                            class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                <p>
                                    <label for="lastname" class="bg-white text-gray-600 px-1">Last name *</label>
                                </p>
                            </div>
                            <p>
                                <input id="lastname" autocomplete="false" tabindex="0" type="text"
                                    class="py-1 px-1 outline-none block h-full w-full">
                            </p>
                        </div>
                        <div
                            class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                <p>
                                    <label for="username" class="bg-white text-gray-600 px-1">Username *</label>
                                </p>
                            </div>
                            <p>
                                <input id="username" autocomplete="false" tabindex="0" type="text"
                                    class="py-1 px-1 outline-none block h-full w-full">
                            </p>
                        </div>
                        <div
                            class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                <p>
                                    <label for="password" class="bg-white text-gray-600 px-1">Password *</label>
                                </p>
                            </div>
                            <p>
                                <input id="password" autocomplete="false" tabindex="0" type="password"
                                    class="py-1 px-1 outline-none block h-full w-full">
                            </p>
                        </div>
                    </div>
                    <div class="border-t mt-6 pt-3">
                        <button
                            class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
