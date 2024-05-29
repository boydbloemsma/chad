<article id="message-board">
    <div id="messages-overview">
        @forelse($room->messages as $message)
            <div class="message @if($message->sentByUser()) owned-message @endif" wire:key="{{ $message->id }}">
                <small>
                    {{ $message->user->name }} - {{ $message->sentAt() }}
                </small>
                <p>{{ $message->message }}</p>
            </div>
        @empty
            Nothing has been said in this room yet...
        @endforelse
    </div>

    <livewire:send-message :room="$room" />
</article>

@script
<script>
    const scroll_div = document.querySelector('#messages-overview');

    window.onload = function () {
        scroll_div.scroll({
            top: scroll_div.scrollHeight,
            left: 0,
            behavior: 'instant',
        });
    }

    window.Echo.private(`messages.{{ $room->id }}`)
        .listen('MessageSend', async () => {
            await $wire.$refresh();
            scroll_div.scroll({
                top: scroll_div.scrollHeight,
                left: 0,
                behavior: 'smooth',
            });
        });
</script>
@endscript
