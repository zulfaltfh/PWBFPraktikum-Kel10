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
            $table->id('id_detail_penerimaan');
            $table->integer('harga_his');
            $table->integer('jumlah_his');
            $table->char('subtotal',10)->nullable();
            $table->timestamps();
            
            $table->foreignId('id_terima')->constrained('penerimaan');
            $table->foreignId('kode_bar')->constrained('table_barang');
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
