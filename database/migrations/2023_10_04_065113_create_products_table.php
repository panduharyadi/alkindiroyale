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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kamar');
            $table->string('harga');
            $table->text('deskripsi');
            $table->string('image');
            $table->string('lokasi');
            $table->string('petak')->nullable();
            $table->string('set_bed')->nullable();
            $table->string('dapur')->nullable();
            $table->string('parkir')->nullable();
            $table->string('alat_mandi')->nullable();
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
        Schema::dropIfExists('products');
    }
};
