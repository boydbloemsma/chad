<x-app-layout>
    <x-slot:header>
        {{ $room->name }}
    </x-slot:header>

    <livewire:room-messages :room="$room" />
    <livewire:send-message :room="$room" />
</x-app-layout>
