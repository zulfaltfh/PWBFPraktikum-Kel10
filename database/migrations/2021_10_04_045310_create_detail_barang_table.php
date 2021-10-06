<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_barang', function (Blueprint $table) {
            $table->char('kode_bar', 5);
            $table->char('id_ukuran', 5);
            $table->char('id_warna', 5);
            $table->timestamps();

            $table->primary(['kode_bar','id_ukuran','id_warna']);
            $table->foreign('id_ukuran')->references('id')->on('table_ukuran');
            $table->foreign('kode_bar')->references('id')->on('table_barang');
            $table->foreign('id_warna')->references('id')->on('table_warna');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_barang');
    }
}
