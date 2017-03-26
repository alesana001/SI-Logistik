<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogistikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('idbarang',50)->primary();
            $table->string('nama',50);
            $table->string('kategori',50);
            $table->integer('jumlah');
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('idtransaksi',50)->primary();
            $table->date('tanggal');
            $table->string('jenistransaksi',50);
            $table->string('pengirim',50);
            $table->string('penerima',50);
            $table->string('asramatujuan',50);
        });

        Schema::create('transaksisatuan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('idtransaksisatuan',50)->primary();
            $table->string('idbarang',50);
            $table->string('idtransaksi',50);
            $table->integer('jumlah');
            $table->string('keterangan',50);
            $table->foreign('idbarang')->references('idbarang')->on('barang');
            $table->foreign('idtransaksi')->references('idtransaksi')->on('transaksi');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('transaksisatuan');
        Schema::dropIfExists('barang');
        Schema::dropIfExists('transaksi');
    }
}
