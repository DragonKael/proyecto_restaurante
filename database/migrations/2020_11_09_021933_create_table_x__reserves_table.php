<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableXReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_x__reserves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_table');
            $table->foreignId('id_reserve');
            $table->string('datails');
            $table->timestamps();
            $table->foreign('id_table')->references('id')->on('tables');
            $table->foreign('id_reserve')->references('id')->on('reservations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_x__reserves');
    }
}
