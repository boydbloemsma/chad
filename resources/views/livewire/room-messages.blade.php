<article id="messages-overview">
    @forelse($room->messages as $message)
        <article class="message @if($message->sentByUser()) owned-message @endif" wire:key="{{ $message->id }}">
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
        .listen('MessageSend', () => {
            $wire.$refresh();
        });
</script>
@endscript
