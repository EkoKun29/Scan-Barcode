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
            $table->float('kadar_air',8,2)->nullable()->change();
            $table->float('benih_murni',8,2)->nullable()->change();
            $table->float('camp_var_lain',8,2)->nullable()->change();
            $table->float('kotoran_benih',8,2)->nullable()->change();
            $table->float('benih_tanaman_lain',8,2)->nullable()->change();
            $table->float('daya_berkecambah',8,2)->nullable()->change();
            $table->float('biji_gulma',8,2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('qr_codes', function (Blueprint $table) {
            $table->float('kadar_air', 8, 2)->change();
            $table->float('benih_murni', 8, 2)->change();
            $table->float('camp_var_lain', 8, 2)->change();
            $table->float('kotoran_benih', 8, 2)->change();
            $table->float('benih_tanaman_lain', 8, 2)->change();
            $table->float('daya_berkecambah', 8, 2)->change();
            $table->float('biji_gulma', 8, 2)->change();
        });
    }
};
