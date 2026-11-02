<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Community-Built Digital Village Hub | Zee Tech Foundation')</title>
    <meta name="description" content="@yield('meta_description', 'Connecting People. Building Skills. Creating Opportunities. A proposed initiative under Zee Tech Foundation’s “No One Left Offline” vision.')">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpeg') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="theme-color" content="#047857">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Community-Built Digital Village Hub | Zee Tech Foundation')">
    <meta property="og:description" content="@yield('meta_description', 'Connecting People. Building Skills. Creating Opportunities. A proposed initiative under Zee Tech Foundation’s “No One Left Offline” vision.')">
    <meta property="og:image" content="{{ asset('images/logo.jpeg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Community-Built Digital Village Hub | Zee Tech Foundation')">
    <meta name="twitter:description" content="@yield('meta_description', 'Connecting People. Building Skills. Creating Opportunities. A proposed initiative under Zee Tech Foundation’s “No One Left Offline” vision.')">
    <meta name="twitter:image" content="{{ asset('images/logo.jpeg') }}">

    <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white flex flex-col min-h-screen">

    @yield('content')

    @stack('scripts')
</body>
</html>
