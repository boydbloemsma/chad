<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'room_id' => $this->faker->numberBetween(1, 10),
            'message' => $this->faker->realText(),
        ];
    }
}
