<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rooms\StoreRequest;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $validated_request = $request->validated();

        $room = Room::create([
            'name' => $validated_request['name'],
            'slug' => Str::slug($validated_request['name']),
        ]);

        $user_ids = User::all('id')->pluck('id')->toArray();
        $room->users()->attach($user_ids);

        return redirect()->route('rooms.show', $room);
    }
}
