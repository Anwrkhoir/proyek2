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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('produk_id');
            $table->string('pcs');
            $table->string('kategori_id');
            $table->string('user_id');
            $table->string('layanan');
            $table->string('status');
            $table->foreign('produk_id')->references('id')->on('produks');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
