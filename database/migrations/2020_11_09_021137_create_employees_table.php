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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->enum('position',['Lider','Jefe','Contratado','En_prueba'])->default('En_prueba');
            $table->integer('salary');
            $table->string('email')->unique();
            $table->date('admission_date');
            $table->enum('status',['Activo','Promovido','Retirado'])->default('Activo');
            $table->enum('job',['Cosinero','Mozo','Bartender','Jalador','Ayudante','Lavador'])->default('Ayudante');
            $table->foreignId('boss');
            $table->string('document');
            $table->enum('document_type',['DNI','Pasaporte']);
            $table->string('phone');
            $table->enum('gender',['N/A','Masculino','Femenino'])->default('N/A');
            $table->string('address');
            $table->foreignId('id_branch');
            $table->timestamps();
            $table->foreign('id_branch')->references('id')->on('branches');
            $table->foreign('boss')->references('id')->on('employees');
        });
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
