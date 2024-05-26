<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.scss'])

    <title>Laravel</title>

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
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('logout.index') }}">Logout</a></li>
                </ul>
            </nav>
        </header>

        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
