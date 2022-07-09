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
            // nombre de la persona
            $table->string('nombre', 250);
            // dui de la persona
            $table->string('dui', 250)->nullable();
            // correo de la persona, se le envia un correo cuando se inscribe
            $table->string('correo', 250);
            // slug de url, se autocompleta cambiando espacios por -
            $table->string('slug', 250);
            // ¿el cupon esta activo?
            $table->string('is_active', 2)->default('1');
            // ¿hasta cuando esta vigente?
            $table->date('caducidad');
            /**
             * * ¿a que campaña pertenece?
             * 1 => VIP
             * 2 => Campaña Encuestas
             * 3 => Campaña Lealtad (10%)
             * 4 => Campaña Lealtad (Postre)
             * 5 => Premios Varios
             */
            $table->string('tipo');
            // ¿a que empresa pertenece?, no siempre pertenecera a una empresa
            $table->string('empresa', 250)->nullable();
            // ¿cual es el premio?
            $table->string('descuento', 250);
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
