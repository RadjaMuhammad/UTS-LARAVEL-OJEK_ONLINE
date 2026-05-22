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
        Schema::create('riwayat_perjalanans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('penumpang_id')
                ->constrained('penumpangs')
                ->onDelete('cascade');

            $table->foreignId('driver_id')
                ->constrained('drivers')
                ->onDelete('cascade');

            $table->string('lokasi_jemput');
            $table->string('tujuan');
            $table->integer('harga');
            $table->enum('status', ['selesai', 'dibatalkan']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_perjalanans');
    }
};
