<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id()->comment('Campo que almacena el id del paciente');
            $table->text('primer_nombre')->comment('Campo que almacena el primer nombre del paciente');
            $table->text('primer_apellido')->comment('Campo que almacena el primer apellido del paciente');
            $table->text('segundo_nombre')->comment('Campo que almacena el segundo nombre del paciente');
            $table->text('segundo_apellido')->comment('Campo que almacena el segundo apellido del paciente');
            $table->String('direccion')->comment('Campo que almacena la dirección del paciente');
            $table->text('tipo_documento')->comment('Campo que almacena el tipo de documento del paciente');
            $table->text('numero_documento')->nullable()->comment('Campo que almacena el número de documento del paciente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
