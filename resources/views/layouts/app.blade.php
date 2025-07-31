<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Preload assets -->
    <link rel="preload" href="/css/app.css" as="style">
    <link rel="preload" href="/js/app.js" as="script">

        <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Turbo.js CDN -->
    <script src="https://unpkg.com/@hotwired/turbo@8.0.4/dist/turbo.es2017-umd.js"></script>

    <!-- Load CSS -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="min-h-screen">
        @yield('content')
    </div>

    <!-- Load JS -->
    <script src="/js/app.js"></script>
</body>
</html>
