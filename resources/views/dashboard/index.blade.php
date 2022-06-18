@extends('layouts.main')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Tableau de bord
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <x-statistics label='Nombre de Cv' number='100' />
            <x-statistics label='Nombre de Cv' number='100' />
            <x-statistics label='Nombre de Cv' number='100'/>
            <x-statistics label='Nombre de Cv' number='100'/>
        </div>
    @endsection
