<article>
    @forelse($room->messages as $message)
        <article>
            <header>
                {{ $message->user->name }}
            </header>
            {{ $message->message }}
        </article>
    @empty
        Nothing has been said in this room yet...
    @endforelse
</article>
