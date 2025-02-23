<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notification_id')->constrained();
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('position_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->date('schedule');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queues');
    }
}
