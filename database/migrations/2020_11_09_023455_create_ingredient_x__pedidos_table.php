<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientXPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_x__pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ingredient');
            $table->foreignId('id_pedido');
            $table->integer('quantity');
            $table->string('observations');
            $table->date('expiration_date');
            $table->timestamps();
            $table->foreign('id_ingredient')->references('id')->on('ingredients');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_x__pedidos');
    }
}
