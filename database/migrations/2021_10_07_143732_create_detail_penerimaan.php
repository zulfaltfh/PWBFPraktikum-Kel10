<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenerimaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penerimaan', function (Blueprint $table) {
            $table->id();
            $table->integer('harga_his');
            $table->integer('jumlah_his');
            $table->integer('sub_total');
            $table->timestamps();
        });

        Schema::table('detail_penerimaan', function (Blueprint $table) {
            $table->foreignId('id_terima')->constrained('table_penerimaan');
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
