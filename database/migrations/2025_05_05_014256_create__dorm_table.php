<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->enum('role', ['admin', 'staf', 'mahasiswa']);
            $table->timestamps();
        });
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            $table->integer('Nomor kamar');
            $table->string('Gedung');
            $table->integer('Kapasitas');
            $table->decimal('Harga_sewa', 10, 2);
            $table->timestamps();
        });
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->constrained('user')->onDelete();
            $table->integer('ruangan_id')->constrained('ruangan')->onDelete();
            $table->integer('tanggal_sewa');
            $table->date('akhir_sewa');
            $table->timestamps();
        });
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->int('penyewaan_id')->constrained('penyewaan')->onDelete();
            $table->decimal('total biaya', 10, 2);
            $table->enum('status', ['selesai', 'pending']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('ruangan');
        Schema::dropIfExists('penyewaan');
        Schema::dropIfExists('pembayaran');
    }
};
