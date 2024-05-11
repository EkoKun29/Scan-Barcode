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
        Schema::table('qr_codes', function (Blueprint $table) {
            $table->string('kadar_air')->nullable()->change();
            $table->string('benih_murni')->nullable()->change();
            $table->string('camp_var_lain')->nullable()->change();
            $table->string('kotoran_benih')->nullable()->change();
            $table->string('benih_tanaman_lain')->nullable()->change();
            $table->string('daya_berkecambah')->nullable()->change();
            $table->string('biji_gulma')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('qr_codes', function (Blueprint $table) {
            //
        });
    }
};
