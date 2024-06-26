<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'recipient_id',
        'room_id',
        'message',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recipient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function sentByUser(): bool
    {
        return Auth::id() === $this->user_id;
    }

    public function sentAt()
    {
        if ($this->created_at->isToday()) {
            return $this->created_at->format('H:i');
        }
        return $this->created_at->diffForHumans();
    }
}
