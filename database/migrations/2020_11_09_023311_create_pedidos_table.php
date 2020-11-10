<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->DateTime('date');
            $table->enum('status',['En_proceso','Cancelado','Entregado'])->default('En_proceso');
            $table->foreignId('id_branch');
            $table->foreignId('id_provider');
            $table->enum('modality',['Personal','Delivery']);
            $table->timestamps();
            $table->foreign('id_branch')->references('id')->on('branches');
            $table->foreign('id_provider')->references('id')->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
