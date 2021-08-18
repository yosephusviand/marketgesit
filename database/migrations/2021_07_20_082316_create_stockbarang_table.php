<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockbarang', function (Blueprint $table) {
            $table->id();
            $table->integer('idkategori')->nullable();
            $table->integer('idsubkategori')->nullable();
            $table->string('nama')->nullable();
            $table->double('qty')->nullable();
            $table->double('stock_qty')->nullable();
            $table->string('harga')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockbarang');
    }
}
