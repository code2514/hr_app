<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Status;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status_id' => Status::factory(),
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'work_phone' => $this->faker->regexify('[A-Za-z0-9]{13}'),
            'employee_number' => $this->faker->numberBetween(-10000, 10000),
            'title' => $this->faker->sentence(4),
            'boss_id' => $this->faker->numberBetween(-10000, 10000),
            'has_medical_benefits' => $this->faker->boolean,
            'softdeletes' => $this->faker->word,
        ];
    }
}
