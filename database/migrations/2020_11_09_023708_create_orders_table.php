<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_table');
            $table->foreignId('id_reserve');
            $table->foreignId('id_product');
            $table->enum('status',['Atendido','Completada','Cancelado','En_proceso'])->default('Atendido');
            $table->enum('modality',['Local','Empaquetado','Delivery'])->default('Local');
            $table->timestamps();
            $table->foreign('id_table')->references('id')->on('tables');
            $table->foreign('id_reserve')->references('id')->on('reservations');
            $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
