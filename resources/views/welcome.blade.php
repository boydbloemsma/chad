<x-guest-layout>
    <x-slot:header>
        Welcome
    </x-slot:header>

    <section>
        <p>
            This is a example project to see what I could create using realtime technologies.
            <br />
            Rooms and messages are purged every 24 hours.
        </p>

        <a href="{{ route('register') }}">
            <button>
                Register now
            </button>
        </a>
    </section>
</x-guest-layout>
