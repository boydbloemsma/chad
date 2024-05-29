<?php

namespace App\Livewire;

use App\Models\Room;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class RoomMessages extends Component
{
    public Room $room;
    public Collection $messages;

    public function mount()
    {
        $this->loadMessages();
    }

    public function render()
    {
        return view('livewire.room-messages');
    }

    #[On('message-added')]
    public function loadMessages()
    {
        $this->messages = $this->room->messages;
    }
}
