<article id="message-board">
    <div id="messages-overview">
        @forelse($messages as $message)
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
    window.onload = function () {
        function scrollOverview() {
            const scroll_div = document.querySelector('#messages-overview');

            scroll_div.scroll({
                top: scroll_div.scrollHeight,
                left: 0,
            });
        }

        scrollOverview();

        $wire.on('message-added', async () => {
            await new Promise(r => setTimeout(r, 100));
            scrollOverview();
        });

        window.Echo.private(`messages.{{ $room->id }}`)
            .listen('MessageSend', async () => {
                await $wire.loadMessages();
                scrollOverview();
            });
    }
</script>
@endscript
