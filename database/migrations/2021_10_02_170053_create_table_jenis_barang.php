<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJenisBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_jenis_barang', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_barang', 20);
            $table->timestamps();

            //$table->foreignId('id_jenisBarang')->constrained('table_jenis_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_jenis_barang');
    }
}
