<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pesan');
            $table->string('status_pesan');
            $table->timestamps();

            //$table->foreignId('id_user')->constrained('table_user');
            //$table->foreignId('id_supplier')->constrained('table_supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pemesanan');
    }
}
