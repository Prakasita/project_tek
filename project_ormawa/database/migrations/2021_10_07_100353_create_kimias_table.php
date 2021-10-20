<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKimiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kimias', function (Blueprint $table) {
            $table->id();
            $table->char('kode_bahan',8)->unique();
            $table->char('nama_bahan');
            $table->char('sifat_larutan');
            $table->char('sifat_bahaya');
            $table->date('tanggal_produksi');
            $table->integer('jumlah_produk');
            $table->decimal('derajat_keasaman',4,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kimias');
    }
}
