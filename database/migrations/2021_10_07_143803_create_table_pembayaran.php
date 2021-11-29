<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('total_bayar');
            $table->timestamps();
        });

        Schema::table('table_pembayaran', function (Blueprint $table) {
            $table->foreignId('id_terima')->constrained('table_penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pembayaran');
    }
}
