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
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->id();
            $table->string('no_induk')->nullable();
            $table->string('no_lot')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('jenis_tanaman')->nullable();
            $table->string('varietas')->nullable();
            $table->string('no_kelompok')->nullable();
            $table->string('berat_bersih')->nullable();
            $table->date('tanggal_panen')->nullable();
            $table->date('tanggal_selesai_uji')->nullable();
            $table->date('tanggal_akhir_label')->nullable();
            $table->integer('kadar_air')->nullable();
            $table->integer('benih_murni')->nullable();
            $table->integer('camp_var_lain')->nullable();
            $table->integer('kotoran_benih')->nullable();
            $table->integer('benih_tanaman_lain')->nullable();
            $table->integer('daya_berkecambah')->nullable();
            $table->integer('biji_gulma')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_codes');
    }
};
