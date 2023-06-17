<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogadoreProdutoPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogadore_produto', function (Blueprint $table) {
            $table->unsignedBigInteger('jogadore_id')->index();
            $table->foreign('jogadore_id')->references('id')->on('jogadores')->onDelete('cascade');
            $table->unsignedBigInteger('produto_id')->index();
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->primary(['jogadore_id', 'produto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogadore_produto');
    }
}
