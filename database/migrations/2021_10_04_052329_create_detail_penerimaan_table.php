<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenerimaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penerimaan', function (Blueprint $table) {
            $table->char('id_trima',5);
            $table->char('kode_bar',5);
            $table->integer('harga_his');
            $table->integer('jumlah_his');
            $table->char('subtotal',10)->nullable();
            $table->timestamps();

            $table->primary(['kode_bar','id_trima']);
            $table->foreign('id_trima')->references('id_trima')->on('penerimaan');
            $table->foreign('kode_bar')->references('kode_bar')->on('table_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penerimaan');
    }
}
