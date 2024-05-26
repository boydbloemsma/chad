<x-app-layout>
    <x-slot:header>
        Dashboard
    </x-slot:header>

    <section id="dashboard" class="grid">
        <aside>
            <nav>
                <p><b>Rooms</b></p>
                <ul>
                    @forelse(auth()->user()->rooms as $room)
                        <li>
                            <a href="{{ route('rooms.show', $room->slug) }}">
                                {{ $room->name }}
                            </a>
                        </li>
                    @empty
                        <li>
                            You are not in any rooms yet, create one below or join one.
                        </li>
                    @endforelse
                    <hr />
                    <li>
                        <a href="{{ route('rooms.index') }}" class="secondary">
                            Add room
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div>
            <h1>Hello world!</h1>
            <p>Lorem ipsum</p>
        </div>
    </section>
</x-app-layout>
