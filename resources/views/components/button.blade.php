@props(['title', "route"])
<a href='{{ route($route) }}'
    class='bg-transparent hover:bg-green-900 text-white font-bold hover:text-white py-4 px-6 border border-green-900 hover:border-transparent rounded'>
    {{ $title }}
</a>
