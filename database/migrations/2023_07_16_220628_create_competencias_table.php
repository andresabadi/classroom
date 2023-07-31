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
        Schema::create('competencias', function (Blueprint $table){
            $table->id(); 
            $table->string("title"); 
            $table ->string('slug'); 
            $table->string("image_url")->nullable(); 
            $table->string("zoom_url")->nullable(); 
            $table->string("slack_url")->nullable(); 
            $table->string('presentaciones_url')->nullable();
            $table->string('grabaciones_url')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps(); 
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('competencias', function (Blueprint $table) {
            Schema::dropIfExists('competencias');
        });
    }
};
