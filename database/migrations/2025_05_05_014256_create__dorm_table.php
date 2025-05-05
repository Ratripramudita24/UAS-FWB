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
            $table->string('Nama');
            $table->string('Email')->unique();
            $table->string('Password')->unique();
            $table->enum('Role', ['admin', 'staf', 'mahasiswa']);
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
            $table->integer('User_id')->constrained('user')->onDelete();
            $table->integer('Ruangan_id')->constrained('ruangan')->onDelete();
            $table->integer('Tanggal_sewa');
            $table->date('Akhir_sewa');
            $table->timestamps();
        });
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->int('Penyewaan_id')->constrained('penyewaan')->onDelete();
            $table->decimal('Total biaya', 10, 2);
            $table->enum('Status', ['selesai', 'pending']);
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
