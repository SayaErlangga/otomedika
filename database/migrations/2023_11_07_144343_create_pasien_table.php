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
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments("id_pasien");
            $table->integer("id_posyandu")->unsigned();
            $table->string("nama");
            $table->char("jenis_kelamin");
            $table->date("tanggal_lahir");
            $table->string("alamat");
            $table->timestamps();
        });

        Schema::table('pasien', function (Blueprint $table) {
            $table->foreign("id_posyandu")->references("id_posyandu")->on("posyandu");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
};
