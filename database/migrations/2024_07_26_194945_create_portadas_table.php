<?php

use App\Models\Portada;
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
        Schema::create('portadas', function (Blueprint $table) {
            $table->id();
            $table->enum('portada',[Portada::P1, Portada::P2, Portada::P3, Portada::P4, Portada::P5, Portada::Vistos, Portada::Semana ])->default(Portada::Semana);
            $table->unsignedBigInteger('articulo_id');

            $table->foreign('articulo_id')
                  ->references('id')
                  ->on('articulos')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portadas');
    }
};
