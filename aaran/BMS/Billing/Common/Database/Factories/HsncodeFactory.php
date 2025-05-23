<?php

namespace Aaran\BMS\Billing\Common\Database\Factories;

use Aaran\BMS\Billing\Common\Models\Hsncode;
use Illuminate\Database\Eloquent\Factories\Factory;

class HsncodeFactory extends Factory
{
    protected $model = Hsncode::class;

    public function definition(): array
    {
        return [
            'vname' => $this->faker->name,
            'active_id' => 1
        ];
    }
}
