<article>
    @forelse($room->messages as $message)
        <article wire:key="{{ $message->id }}">
            <header>
                {{ $message->user->name }}
            </header>
            <p>{{ $message->message }}</p>
        </article>
    @empty
        Nothing has been said in this room yet...
    @endforelse
</article>

@script
<script>
    window.Echo.private(`messages.{{ $room->id }}`)
        .listen('MessageSend', (e) => {
            console.log(e.message.message);
            $wire.$refresh();
        });
</script>
@endscript
