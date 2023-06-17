<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoReservaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_reserva', function (Blueprint $table) {
            $table->unsignedBigInteger('produto_id')->index();
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->unsignedBigInteger('reserva_id')->index();
            $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade');
            $table->primary(['produto_id', 'reserva_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_reserva');
    }
}
