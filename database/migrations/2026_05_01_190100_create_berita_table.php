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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_berita_id');
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->unsignedBigInteger('jumlah_tayang')->default(0);
            $table->timestamps();

            $table->foreign('category_berita_id')
                ->references('id')
                ->on('category_berita')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
