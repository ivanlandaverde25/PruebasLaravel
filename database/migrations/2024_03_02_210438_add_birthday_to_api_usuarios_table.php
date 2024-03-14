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
            $table->timestamp('fecha_cumpleanio')->nullable()->after('contrasena');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('api_usuarios', function (Blueprint $table) {
            $table->dropColumn('fecha_cumpleanio');
        });
    }
};
