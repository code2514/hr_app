<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Notification;
use App\Models\Position;
use App\Models\Queue;
use App\Models\Status;
use App\Models\Type;

class QueueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Queue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'notification_id' => Notification::factory(),
            'employee_id' => Employee::factory(),
            'position_id' => Position::factory(),
            'type_id' => Type::factory(),
            'status_id' => Status::factory(),
            'schedule' => $this->faker->date(),
        ];
    }
}
