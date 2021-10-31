<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bar', 100);
            $table->integer('stock_barang');
            $table->integer('harga_beli_bar');
            $table->integer('harga_jual_bar');
            $table->timestamps();
        });

        Schema::table('table_barang', function (Blueprint $table) {
            $table->foreignId('id_jb')->constrained('table_jenis_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_barang');
    }
}
