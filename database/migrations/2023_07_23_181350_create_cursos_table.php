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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); 
            $table->string("title"); 
            $table ->string('slug'); 
            $table->string("description");
            $table->string('duration'); 
            $table->unsignedBigInteger('competencia_id')->onDelete('cascade');
            $table->foreign('competencia_id')->references('id')->on('competencias')->onDelete('cascade');
            $table->string('cursera_url')->nullable();
            // $table->string('presentaciones_url')->nullable();
            // $table->string('grabaciones_url')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
