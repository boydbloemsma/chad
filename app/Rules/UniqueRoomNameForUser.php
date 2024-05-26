<?php

namespace App\Rules;

use App\Models\Room;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UniqueRoomNameForUser implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $room_name_exists = Room::where('slug', Str::slug($value))
            ->whereHas('users', function ($query) {
                $query->where('user_id', Auth::user()->id);
            })->exists();

        if ($room_name_exists) {
            $fail('You already have a room named this way.');
        }
    }
}
