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
        Schema::create('tbtransaksis', function (Blueprint $table) {
            $table->bigIncrements('idtransaksi');
            $table->integer('idkasir');
            $table->integer('idbarang');
            $table->integer('gty');
            $table->integer('totalbayar');
            $table->date('tgltransaksi',['dd:mm:yyyy']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbtransaksis');
    }
};
