<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrukPembelanjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struk_pembelanjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('TotalPembayaran');
            $table->enum('JenisPembayaran', ['Tunai', 'Credit', 'Aplikasi']);
            $table->text('DeskripsiPembelanjaan')->nullable();
            $table->integer('StrukMember')->nullable()->unsigned();
            $table->timestamps();
            $table->index('StrukMember');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('struk_pembelanjaan');
    }
}
