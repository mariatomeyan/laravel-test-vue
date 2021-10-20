<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Car & Classic') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://use.typekit.net/uew8ptt.css"/>
</head>
<body class="bg-background">

<div id="app" is-logged-in="{{ Auth::check() ? 'true' : 'false' }}" class="w-screen bg-white   m-auto">
    <header>
      <nav-bar></nav-bar>
    </header>
    <main class="py-4 px-8">
        @yield('content')
    </main>
</div>
</body>
</html>
