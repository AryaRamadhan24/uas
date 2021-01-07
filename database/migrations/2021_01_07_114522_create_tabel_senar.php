<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelSenar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_senar', function (Blueprint $table) {
            $table->string('senar_id',40);
            $table->string('id_jenis');
            $table->string('id_ukuran');


            $table->primary('senar_id');
            
            // relasi senar dengan jenis
            $table->foreign('id_jenis')
            ->references('jenis_id')->on('data_jenis')->onDelete('restrict');

            // relasi senar dengan ukuran
            $table->foreign('id_ukuran')
            ->references('ukuran_id')->on('data_ukuran')

            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_senar');
    }
}
