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
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_ekstra_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('foto')->nullable();
            $table->string('judul', 255);
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('admin_ekstra_id')->references('id')->on('admin_ekstra')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('restrict');
            $table->index(['admin_ekstra_id', 'kategori_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
