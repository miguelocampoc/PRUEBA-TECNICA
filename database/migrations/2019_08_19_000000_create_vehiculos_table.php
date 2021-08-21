<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->nullable();
            $table->string('color')->nullable();
            $table->string('marca')->nullable();
            $table->string('tipo_vehiculo')->nullable();
            $table->foreignId('conductor_id')
            ->nullable()
            ->constrained('personas')
            ->onDelete('no action')
            ->onUpdate('cascade');
            $table->foreignId('propietario_id')
            ->nullable()
            ->constrained('personas')
            ->onDelete('no action')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('vehiculos');
    }
}
