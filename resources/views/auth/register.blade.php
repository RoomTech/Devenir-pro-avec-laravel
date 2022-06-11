@extends('layouts.app')
@section('content')
    <header class='pt-10 pb-10 bg-gradient-to-l from-indigo-900 to-indigo-500'>
        <div class='container mx-auto'>
            @include('partials.navbar')
            <div class='mt-28  items-center'>
                <div class='text-center mx-auto'>
                    <h2 class='text-6xl text-white font-bold mb-2'>Inscrivez-vous</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mx-auto px-24 mt-10">
        <p class="text-center text-xl text-blue-700">Veuillez remplit le formulaire afin de créer un compte, pour postuler a une offre d'emploi</p>
        @include('partials.flasher')
        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre
                    nom</label>
                <input type="text" name="nom"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="flowbite" value="{{ old('nom') }}" required>
            </div>
            @error('nom')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <div class="mb-6">
                <label for="prenoms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre
                    prenoms</label>
                <input type="text" name="prenoms" id="prenoms" value="{{ old('prenoms') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            @error('prenoms')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre
                    email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="mb-6">
                <label for="Photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre
                    photo</label>
                <input type="file" name="lien_photo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            @error('lien_photo')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="mb-6">
                <label for="CV" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre
                    CV</label>
                <input type="file" name="cv"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            @error('cv')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <div class="mb-6">
                <label for="Contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entrer votre
                    contact</label>
                <input type="text" name="contact" value="{{ old('contact') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            @error('contact')
                <span class="text-red-500">{{ $message }}</span>
            @enderror



            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer</button>


            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <a href="{{ route('login') }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">J'ai
                        un compte </a>
                </div>
            </div>

        </form>
    </section>
@endsection
