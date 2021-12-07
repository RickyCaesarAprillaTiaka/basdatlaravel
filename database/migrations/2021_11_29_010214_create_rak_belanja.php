<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakBelanja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rak_belanja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NamaProduk', 100);
            $table->string('MerkProduk', 100);
            $table->integer('JenisProduk')->unsigned();
            $table->integer('PersediaanProduk');
            $table->integer('HargaProduk');
            $table->text('DeskripsiProduk');
            $table->timestamps();
            $table->index('JenisProduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rak_belanja');
    }
}
