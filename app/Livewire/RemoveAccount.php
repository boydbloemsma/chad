<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RemoveAccount extends Component
{
    public function remove()
    {
        User::find(Auth::id())->delete();

        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirectRoute('welcome');
    }

    public function render()
    {
        return view('livewire.remove-account');
    }
}
