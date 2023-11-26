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
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('perusahaan')->nullable();
            $table->string('kontak')->nullable();
            $table->string('nilai_sudah_bayar')->nullable();
            $table->string('nilai_belum_bayar')->nullable();
            $table->string('tanggal_bayar')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**W
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
