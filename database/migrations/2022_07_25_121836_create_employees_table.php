<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id')->constrained();
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->string('email', 40)->nullable();
            $table->string('work_phone', 13);
            $table->integer('employee_number');
            $table->string('title', 40)->nullable();
            $table->integer('boss_id')->nullable();
            $table->boolean('has_medical_benefits')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('employees');
    }
}
