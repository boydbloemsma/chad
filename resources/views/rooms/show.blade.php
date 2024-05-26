<x-app-layout>
    <x-slot:header>
        {{ $room->name }}
    </x-slot:header>

    <a href="{{ route('dashboard') }}" class="secondary">
        ← Return
    </a>

    <section>
        <livewire:room-messages :room="$room" />
        <livewire:send-message :room="$room" />
    </section>
</x-app-layout>
