<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkDayRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_day_records', function (Blueprint $table) {
            $table->id();
            $table->DateTime('start_time');
            $table->DateTime('end_time');
            $table->foreignId('id_employee');
            $table->string('details');
            $table->timestamps();
            $table->foreign('id_employee')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_day_records');
    }
}
