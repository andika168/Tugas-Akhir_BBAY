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
            $table->string('id_trx')->index();
            $table->string('nama')->nullable();
            $table->unsignedBigInteger('jumlah');
            $table->text('keterangan');
            $table->string('bukti');
            $table->string('jenis');
            $table->string('status')->default('CREATED');
            $table->unsignedBigInteger('dirubah_oleh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangan');
    }
};
