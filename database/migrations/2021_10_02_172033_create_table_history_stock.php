<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHistoryStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_history_stock', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_hs');
            $table->integer('update_stock_hs');
            $table->boolean('status');
            $table->timestamps();

            //$table->foreignId('kode_barang')->constrained('table_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_history_stock');
    }
}
