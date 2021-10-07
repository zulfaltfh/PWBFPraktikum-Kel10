<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user', 40);
            $table->string('alamat_user', 50);
            $table->string('telp_user', 13);
            $table->string('username_user', 20);
            $table->string('password_user', 20);
            $table->timestamps();
        });

        Schema::table('table_user', function (Blueprint $table) {
            $table->foreignId('id_kota')->constrained('table_kota');
            $table->foreignId('id_role')->constrained('table_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user');
    }
}
