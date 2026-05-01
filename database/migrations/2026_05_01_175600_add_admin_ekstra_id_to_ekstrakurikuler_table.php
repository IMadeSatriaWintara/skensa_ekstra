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
        Schema::table('ekstrakurikuler', function (Blueprint $table) {
            $table->unsignedBigInteger('admin_ekstra_id')->nullable()->after('id');
            $table->index('admin_ekstra_id');
            $table->foreign('admin_ekstra_id')
                ->references('id')
                ->on('admin_ekstra')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ekstrakurikuler', function (Blueprint $table) {
            $table->dropForeign(['admin_ekstra_id']);
            $table->dropIndex(['admin_ekstra_id']);
            $table->dropColumn('admin_ekstra_id');
        });
    }
};
