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

@extends('layouts.app')
@section('content')
<header class='pt-10 pb-10 bg-gradient-to-l from-indigo-900 to-indigo-500'>
  <div class='container mx-auto'>
      @include('partials.navbar')
      <div class='mt-28  items-center'>
          <div class='text-center mx-auto'>
              <h2 class='text-6xl text-white font-bold mb-2'>Contact</h2>
          </div>
      </div>
  </div>
</header>
@endsection



