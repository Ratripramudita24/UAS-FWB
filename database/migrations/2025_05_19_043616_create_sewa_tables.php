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
        Schema::create('sewa', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ruangan_id');

            $table->date('tanggal_sewa');
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');

            $table->decimal('jumlah_bayar', 10, 2);
            $table->string('bukti_pembayaran');
            $table->date('tanggal_bayar');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ruangan_id')->references('id')->on('ruangan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
