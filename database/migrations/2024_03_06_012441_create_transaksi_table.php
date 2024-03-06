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
            $table->unsignedBigInteger('barang')->nullable();
            $table->unsignedBigInteger('costumer')->nullable();
            $table->bigInteger('jumlah');
            $table->date('tanggal');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();

            $table->foreign('barang')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('costumer')->references('id')->on('costumers')->onUpdate('cascade')->onDelete('set null');
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
