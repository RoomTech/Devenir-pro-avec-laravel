<nav class='flex justify-between'>
    <a>
        {{ config('app.name') }}
    </a>
    <div>
        <a href='/' class='ml-4 text-white font-bold hover:text-green-200'>Accueil</a>
        <a href='#testimony' class='ml-4 text-white font-bold hover:text-green-200'>Offres</a>
        <a href='#testimony' class='ml-4 text-white font-bold hover:text-green-200'>Témoignages</a>
        <a href='{{ route('contact') }}' class='ml-4 text-white font-bold hover:text-green-200'>Contact</a>
    </div>
</nav>
