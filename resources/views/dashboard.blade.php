<x-app-layout>
    <div class="grid">
        <aside>
            <nav>
                <ul>
                    @foreach(auth()->user()->rooms as $room)
                        <li>
                            <a href="#">
                                {{ $room->name }}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a href="#">+</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div>
            <h1>Hello world!</h1>
            <a href="#">Primary</a>
        </div>
    </div>
</x-app-layout>
