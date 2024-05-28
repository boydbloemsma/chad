<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <title>Chad</title>
</head>
    <body>
        <header class="container">
            <nav>
                <ul>
                    <li><strong>Chad</strong></li>
                </ul>
                <ul>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li>
                        <details class="dropdown">
                            <summary>
                                Account
                            </summary>
                            <ul dir="rtl">
                                <li>
                                    <form action="{{ route('account.destroy') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Remove account" />
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ route('logout.index') }}" method="POST">
                                        @csrf
                                        <input type="submit" value="Logout" class="secondary" />
                                    </form>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="container">
            @isset($header)
                <h1 id="header">
                    {{ $header }}
                </h1>
            @endisset

            {{ $slot }}
        </main>
    </body>
</html>
