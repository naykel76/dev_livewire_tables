<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{

    public function definition()
    {
        return [
            'amount' => rand(100, 50000),
            'order_date' => Carbon::today()->subDays(rand(-365, 365)),
            'due_date' => Carbon::today()->subDays(rand(-365, 365)),
            'status' => $this->faker->randomElement(['paid', 'processing', 'canceled', '']),
            'user_id' => random_int(1,20)
        ];
    }
}
