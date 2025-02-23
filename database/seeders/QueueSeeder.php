<?php

namespace Database\Seeders;

use App\Models\Queue;
use Illuminate\Database\Seeder;

class QueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Queue::factory()->count(5)->create();
    }
}
