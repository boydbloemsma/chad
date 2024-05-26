<?php

namespace App\Http\Middleware;

use App\Models\Room;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserBelongsToRoom
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ($user && $user->rooms->contains($request->room->id)) {
            return $next($request);
        }

        abort(Response::HTTP_NOT_FOUND);
    }
}
