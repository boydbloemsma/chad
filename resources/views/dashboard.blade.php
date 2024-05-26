<x-app-layout>
    <x-slot:header>
        Dashboard
    </x-slot:header>

    <section class="grid">
        <article>
            <aside>
                <nav>
                    <p><b>Private messages</b></p>
                    <ul>
                        @forelse(auth()->user()->chats() as $chat)
                            <li>
                                {{ $chat->recipient->name }}
                            </li>
                        @empty
                            <li>
                                You do not have any private messages yet.
                            </li>
                        @endforelse
                        <li>
                            <a href="{{ route('rooms.index') }}" class="secondary">
                                Message someone
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </article>

        <article>
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
                            @if(auth()->user()->is_admin)
                                <li>
                                    You are not in any rooms yet, create one below or join one.
                                </li>
                            @else
                                <li>
                                    You are not in any rooms yet.
                                </li>
                            @endif
                        @endforelse

                        @if(auth()->user()->is_admin)
                            <li>
                                <a href="{{ route('rooms.index') }}" class="secondary">
                                    Add room
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </aside>
        </article>
    </section>
</x-app-layout>
