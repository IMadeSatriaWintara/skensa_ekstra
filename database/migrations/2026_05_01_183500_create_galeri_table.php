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
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_ekstra_id');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('admin_ekstra_id')->references('id')->on('admin_ekstra')->onDelete('cascade');
            $table->index('admin_ekstra_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
