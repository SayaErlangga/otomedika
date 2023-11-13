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
        Schema::create('data_kesehatan', function (Blueprint $table) {
            $table->increments("id_data");
            $table->integer("id_pasien")->unsigned();
            $table->integer("tinggi_badan");
            $table->integer("berat_badan");
            $table->integer("tensi");
            $table->string("keterangan");
            $table->date("tanggal");
            $table->timestamps();
        });

        Schema::table('data_kesehatan', function (Blueprint $table) {
            $table->foreign('id_pasien')->references('id_pasien')->on('pasien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kesehatan');
    }
};
