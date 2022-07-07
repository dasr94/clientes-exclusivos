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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->string('dui', 250)->nullable();
            $table->string('correo', 250);
            $table->string('slug', 250);
            $table->string('is_active', 2)->default('1');
            $table->date('caducidad');
            $table->string('tipo');
            $table->string('empresa', 250)->nullable();

            $table->double('descuento', 4, 2);
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
        Schema::dropIfExists('clientes');
    }
};
