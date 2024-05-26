<?php

namespace App\Http\Requests\Rooms;

use App\Rules\UniqueRoomNameForUser;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                new UniqueRoomNameForUser(),
            ],
        ];
    }
}
