<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('provider');
            $table->string('nombre_contacto');
            $table->string('phone');
            $table->string('document');
            $table->string('document_type');
            $table->string('address');
            $table->string('email')->unique()->nullable();
            $table->enum('status',['Disponible','Mantenimiento','Cerrado']);
            $table->string('time_open');
            $table->string('time_close');
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
        Schema::dropIfExists('providers');
    }
}
