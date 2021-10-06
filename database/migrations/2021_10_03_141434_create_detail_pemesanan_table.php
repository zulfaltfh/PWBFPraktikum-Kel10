<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanan', function (Blueprint $table) {
            $table->char('id_pesan', 5);
            $table->char('kode_bar', 5);
            $table->integer('jumlah_up')->nullable();
            $table->integer('harga_up')->nullable();
            $table->timestamps();

            $table->primary(['id_pesan','kode_bar']);
            $table->foreign('id_pesan')->references('id')->on('table_pemesanan');
            $table->foreign('kode_bar')->references('id')->on('table_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemesanan');
    }
}
