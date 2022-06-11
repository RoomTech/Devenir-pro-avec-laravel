@if (session()->has('success'))
    <div class="p-4 mb-4 text-sm text-blue-700 bg-green-200 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('info'))
    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-200 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        {{ session()->get('info') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="p-4 mb-4 text-sm text-blue-700 bg-red-200 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        {{ session()->get('error') }}
    </div>
@endif

