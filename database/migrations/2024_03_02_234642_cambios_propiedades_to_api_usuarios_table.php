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
        Schema::table('api_usuarios', function (Blueprint $table) {
            $table->id()->comment('Identificador unico para cada usuario')->change();
            $table->string('nickname', 75)->comment('Columna para manejar el apodo del usuario')->change();
            $table->string('nombre', 75)->comment('Columna para manejar el nombre del usuario')->change();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('api_usuarios', function (Blueprint $table) {
            $table->id()->change();
            $table->string('nickname', 255)->change();
            $table->string('nombre', 255)->change();
        });
    }
};
