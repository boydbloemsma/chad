<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    @vite(['resources/css/app.scss'])

    <title>Chad</title>

    @production
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="LWTANQLN" defer></script>
        <!-- / Fathom -->
    @endproduction
</head>
    <body>
        <header class="container">
            <nav>
                <ul>
                    <li><strong>Chad</strong></li>
                </ul>
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </nav>
        </header>

        <main class="container">
            @isset($header)
                <h1>
                    {{ $header }}
                </h1>
            @endisset

            {{ $slot }}
        </main>
    </body>
</html>
