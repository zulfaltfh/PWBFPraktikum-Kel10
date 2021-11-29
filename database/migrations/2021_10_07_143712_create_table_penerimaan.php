<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenerimaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_penerimaan', function (Blueprint $table) {
            $table->id();
            $table->integer('total_harga');
            $table->char('status_terima', 1);
            $table->timestamps();
        });

        Schema::table('table_penerimaan', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('table_user');
            $table->foreignId('id_sup')->constrained('table_supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_penerimaan');
    }
}
