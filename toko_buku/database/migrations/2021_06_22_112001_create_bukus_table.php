<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
        $table->string('id');
        $table->primary('id');
        $table->string('judul');
        $table->string('noisbn');
        $table->string('penulis');
        $table->string('penerbit');
        $table->integer('tahun');
        $table->integer('stok');
        $table->integer('terjual')->nullable();
        $table->integer('harga_pokok');
        $table->integer('harga_jual');
        $table->integer('ppn');
        $table->integer('diskon');
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
        Schema::dropIfExists('bukus');
    }
}
