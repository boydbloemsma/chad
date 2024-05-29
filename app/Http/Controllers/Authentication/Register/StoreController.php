<?php

namespace App\Http\Controllers\Authentication\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\RegisterRequest;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $credentials = $request->validated();

        User::create($credentials);

        if (Auth::attempt($credentials)) {
            $room_ids = Room::all('id')->pluck('id')->toArray();
            Auth::user()->rooms()->attach($room_ids);

            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'name' => 'Something went wrong. Please try again.',
        ])->onlyInput(['name', 'email']);
    }
}
