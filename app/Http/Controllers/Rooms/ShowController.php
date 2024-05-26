<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\View\View;

class ShowController extends Controller
{
    public function __invoke(Room $room): View
    {
        return view('rooms.show', compact('room'));
    }
}
