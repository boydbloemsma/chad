<x-app-layout>
    <x-slot:header>
        Dashboard
    </x-slot:header>

    <section>
        <p>
            This is an example project to see what I could create using realtime technologies.
            <br />
            Rooms and messages are purged every 24 hours.
            <br />
            Don't use this system for anything serious.
        </p>
    </section>

    <section>
        <article>
            <aside>
                <nav>
                    <p><b>Rooms</b></p>
                    <ul>
                        @forelse($rooms as $room)
                            <li>
                                <a href="{{ route('rooms.show', $room->slug) }}#header">
                                    {{ $room->name }}
                                </a>
                            </li>
                        @empty
                            <li>
                                You are not in any rooms yet, create one below or join one.
                            </li>
                        @endforelse

                        <li>
                            <a href="{{ route('rooms.index') }}" class="secondary">
                                Add room
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </article>
    </section>
</x-app-layout>
