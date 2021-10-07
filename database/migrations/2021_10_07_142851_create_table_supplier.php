<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sup',25);
            $table->string('alamat_sup', 30);
            $table->string('telp_sup', 13);
            $table->timestamps();
        });

        Schema::table('table_supplier', function (Blueprint $table) {
            $table->foreignId('id_kota')->constrained('table_kota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_supplier');
    }
}
