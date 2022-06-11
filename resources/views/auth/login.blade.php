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
            @include('partials.navbar')
            <div class='mt-28  items-center'>
                <div class='text-center mx-auto'>
                    <h2 class='text-6xl text-white font-bold mb-2'>Connectez vous</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mx-auto px-24 mt-10">
      <p class="text-center text-2xl text-blue-700">Connectez vous pour accéder à votre compte</p>
        <form>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre mot de passe</label>
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer</button>
               

                <div class="flex items-start mb-6">
                  <div class="flex items-center h-5">
                    <a href="{{ route('register') }}"  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">J'ai pas de compte </a>
                  </div>
                </div>
                 
        </form> 
    </section>

</body>

</html>
