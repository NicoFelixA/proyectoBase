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
        Schema::create('verificar_codigos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('justificante_id');
            $table->string('codigo_verificacion', 6);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('justificante_id')->references('id')->on('justificantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verificar_codigos');
    }
};
