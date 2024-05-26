<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.scss'])

    <title>Chad</title>

    <!-- Fonts -->

    <!-- Styles -->
</head>
    <body>
        <header class="container">
            <nav>
                <ul>
                    <li><strong>Acme Corp</strong></li>
                </ul>
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
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
