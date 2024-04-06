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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tema');
            $table->string('descripcion');
            $table->string('url_imagen');

            $table->unsignedBigInteger('seccion_id')->nullable();
            $table->foreign('seccion_id') ->references('id') ->on('seccions')->onDelete('cascade')->onUpdate('cascade');
            
            // $table->unsignedBigInteger('multimedia_id')->nullable();
            // $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade')->onUpdate('cascade'); 

            $table->timestamps();
           
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
