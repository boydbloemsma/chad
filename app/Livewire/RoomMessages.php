<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Attributes\On;
use Livewire\Component;

class RoomMessages extends Component
{
    public Room $room;
    public $messages;

    public function mount(?Room $room = null)
    {
        $this->messages = $room->messages;
    }

    public function render()
    {
        return view('livewire.room-messages');
    }

    #[On('message-send')]
    public function fetchNewMessages()
    {
        $this->messages = $this->room->messages;
    }
}
