<?php

namespace App\Livewire;

use App\Models\Message;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SendMessage extends Component
{
    public ?Room $room = null;
    public ?int $recipient_id = null;

    public string $message = '';

    public function send()
    {
        Message::create([
            'user_id' => Auth::user()->id,
            'recipient_id' => $this->recipient_id,
            'room_id' => $this->room->id,
            ...$this->only(['message']),
        ]);

        $this->dispatch('message-send');
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
