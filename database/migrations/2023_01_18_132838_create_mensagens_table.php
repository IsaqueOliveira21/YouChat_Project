<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('remetente_id')->unsigned();
            $table->bigInteger('destinatario_id')->unsigned()->nullable();
            $table->text('mensagem');
            $table->timestamps();

            $table->foreign('remetente_id')->references('id')->on('users');
            $table->foreign('destinatario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagens');
    }
};
