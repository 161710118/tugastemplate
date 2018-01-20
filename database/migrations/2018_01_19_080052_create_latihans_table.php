<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latihans', function (Blueprint $table) {
            $table->increments('id');
            $table->String('NIS');
            $table->String('Nama_Siswa');
            $table->String('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->text('Alamat');
            $table->String('Cita_cita');
            $table->String('Hobi');
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
        Schema::dropIfExists('latihans');
    }
}
