<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckupSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkup_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('request_by', ['USER', 'OPTICIAN']);
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('optician_id');
            $table->unsignedInteger('checkup_id')->nullable();
            $table->dateTime('diagnosed_date')->nullable();
            $table->string('note')->nullable();
            $table->boolean('is_confirmed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkup_schedules');
    }
}
