<x-app-layout>
    <x-slot:header>
        {{ $room->name }}
    </x-slot:header>

    <x-return-arrow href="{{ route('dashboard') }}" />

    <section>
        <livewire:room-messages :room="$room" />
    </section>
</x-app-layout>
