<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    @yield('content')

    <!--newletter barner-->
    <div class="bg-gray-100 text-gray-700  font-sans quicksand">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-full max-w-lg">
                    <form method="POST" action=""
                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Renseignez votre email pour recevoir les dernières offres d'emploi
                            </label>
                        </div>
                        <div class="mb-6">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            @error('email')
                                <p class="text-red-500 text-xs italic">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="">
                            <button
                                class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                Inscrivez-vous
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--tailwind small footer-->
    <footer class="bg-blue-100 mx-auto">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col items-center">
                <p class="text-sm text-gray-600">
                    © 2020 Baragnini. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>
    @include('sweetalert::alert')
</body>

</html>
