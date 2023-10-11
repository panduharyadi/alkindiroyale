<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matoas', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_kamar');
            $table->string('lokasi');
            $table->string('harga');
            $table->string('gambar');
            $table->string('petak');
            $table->string('dapur');
            $table->string('parkir');
            $table->string('alat_mandi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
