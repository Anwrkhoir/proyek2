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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('produk_id');
            $table->string('Kategori_id');
            $table->string('pembayaran_id');
            $table->string('tanggal');
            $table->string('total');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('produk_id')->references('id')->on('produks');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->foreign('pembayaran_id')->references('id')->on('pembayarans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
