<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 2,
            'category_id' => 1,
            'date' => '2022-01-15',
            'type' => 'Income',
            'total' => 20000,
            'title' => 'Bonus'
        ];
    }
}
