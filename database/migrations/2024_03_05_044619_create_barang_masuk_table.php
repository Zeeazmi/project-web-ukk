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
        Schema::create('barangmasuks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang')->nullable();
            $table->date('tanggal');
            $table->bigInteger('jumlah');
            $table->timestamps();

            $table->foreign('barang')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangmasuks');
    }
};
