@props(['title', 'description' => null, 'action' => null])
<header class='pt-10 pb-10 bg-gradient-to-l from-indigo-900 to-indigo-500'>
    <div class='container mx-auto'>
        @include('partials.navbar')
        <div class='mt-28  items-center'>
            <div class='text-center mx-auto'>
                <h2 class='text-6xl text-white font-bold mb-2'>{{ $title }}</h2>
                @isset($description)
                    <p class='text-sm md:text-base text-white'>
                        Votre plateforme d'offres d'emploi...
                    </p>
                @endisset
                @isset($action)
                    <div class='mt-10'>
                        <x-button title='Nos offres' route='offres.index' />
                    </div>
                @endisset
            </div>
        </div>
    </div>
</header>
